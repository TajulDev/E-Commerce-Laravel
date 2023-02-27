<?php

namespace App\Http\Controllers;

use App\Models\producttable;
use App\Models\specification;
use App\Models\category;
use App\Models\display;
use App\Models\graphics;
use App\Models\hard_drive;
use App\Models\os;
use App\Models\power_supply;
use App\Models\processor;
use App\Models\battery;
use App\Models\memory;
use Illuminate\Http\Request;
use App\Http\Requests\addproductpostrequest;
use App\Http\Requests\updateproductpostrequest;

class ProducttableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categorylist = category::all();
        $oslist = os::all();
        $displaylist = display::all();
        $processorlist = processor::all();
        $graphicslist = graphics::all();
        $memorylist = memory::all();
        $hard_drivelist = hard_drive::all();
        $power_supplylist = power_supply::all();
        $batterylist = battery::all();
        return view('admin.addproduct', compact('categorylist','oslist','displaylist','processorlist','graphicslist','memorylist','hard_drivelist','power_supplylist','batterylist'));
    }


    public function store(addproductpostrequest $request)
    {
        $product = new producttable;

        $product->product_title = $request->product_name;
        $product->product_category_id = $request->category;
        $product->product_price = $request->price;
        $product->feature = $request->feature;
        $product->image = $request->image->getClientOriginalName();

        $file = $request->image;
        $file->move(base_path('public/asset/product/'),$file->getClientOriginalName());
        //$file = $request->file('image');
        //$file->move(base_path('public/asset/product/'), $file->getClientOriginalName());
        $product->save();



        $id=$product->id;

        $specification = new specification;

        $specification->os = $request->os;
        $specification->display = $request->display;
        $specification->processor = $request->processor;
        $specification->graphics = $request->graphics;
        $specification->battery = $request->battery;
        $specification->memory = $request->memory;
        $specification->hard_drive = $request->hard_drive;
        $specification->power_supply = $request->power_supply;
        //$specification->product_id = producttable::where('product_title', $request->product_name)->first()->id;
        $specification->product_id = $id;

        $specification->save();
        //return redirect('/admin/addproduct');
        return redirect()->route('addproduct')->withSuccess('Product Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\producttable  $producttable
     * @return \Illuminate\Http\Response
     */
    public function show(specification $specification)
    {   
        /*SELECT product.id, product.product_title, category.category_name, product.product_price, product.feature, product.image, os.name, 
        display.name, processor.name, graphics.name, battery.name, power_supply.name, hard_drive.name, memory.name FROM specification JOIN 
        product ON specification.product_id = product.id JOIN os ON specification.os = os.id JOIN processor ON specification.processor = 
        processor.id JOIN display ON specification.display = display.id JOIN graphics ON specification.graphics = graphics.id JOIN memory 
        ON specification.memory = memory.id JOIN hard_drive ON specification.hard_drive = hard_drive.id JOIN power_supply ON 
        specification.power_supply = power_supply.id JOIN battery ON specification.battery = battery.id JOIN category ON category.id = 
        product.product_category_id;*/
        //$data = producttable::join('specification', 'specification.product_id', '=', 'product.id')
        //->get();
        /*$data = producttable::collect(['product.id','product.product_title','category.category_name','product.product_price','product.feature','product.image'
                                        ,'os.name','display.name','processor.name','graphics.name','battery.name','power_supply.name','hard_drive.name',
                                        'memory.name'])->join(['product' , 'specification.product_id', '=', 'product.id'], ['os', 'specification.os', '=', 'os.id'],[ 'processor', 'specification.processor', '=', 
                                        'processor.id'],[ 'display', 'specification.display', '=', 'display.id'], ['graphics', 'specification.graphics', '=', 'graphics.id'], ['memory', 
                                         'specification.memory', '=', 'memory.id'],[ 'hard_drive', 'specification.hard_drive', '=', 'hard_drive.id'],[ 'power_supply', 
                                        'specification.power_supply', '=', 'power_supply.id'],[ 'battery', 'specification.battery', '=', 'battery.id'],[ 'category', 'category.id', '=', 
                                        'product.product_category_id']);*/
        $data = specification::join ( 'product' , 'specification.product_id', '=', 'product.id')
                              ->join( 'os', 'specification.os', '=', 'os.id')
                              ->join( 'processor', 'specification.processor', '=', 'processor.id')
                              ->join( 'display', 'specification.display', '=', 'display.id')
                              ->join( 'graphics', 'specification.graphics', '=', 'graphics.id')
                              ->join( 'memory', 'specification.memory', '=', 'memory.id')
                              ->join( 'hard_drive', 'specification.hard_drive', '=', 'hard_drive.id')
                              ->join( 'power_supply', 'specification.power_supply', '=', 'power_supply.id')
                              ->join( 'battery', 'specification.battery', '=', 'battery.id')
                              ->join( 'category', 'category.id', '=', 'product.product_category_id')
                              ->orderBy("product.id")
                              ->select('product.id as product_id','product.product_title as product_title','category.category_name as category_name','product.product_price as product_price','product.feature as product_feature','product.image as product_image'
                              ,'os.name as os_name','display.name as display_name','processor.name as processor_name','graphics.name as graphics_name','battery.name as battery_name','power_supply.name as power_supply_name','hard_drive.name as hard_drive_name',
                              'memory.name as memory_name')
                              ->get();
        
        return view('admin.producttable',compact('data'));
    }

    public function deleteproduct($id)
    {   
        //DELETE product,specification FROM `product` JOIN `specification` ON specification.product_id = product.id WHERE product.id = "4";
        
        /*$product_id = producttable::join('specification', 'specification.product_id', '=', 'product.id')
                                  ->find($id)
                                  ->delete();*/
        $delete_product=producttable::find($id)->delete();
        $delete_specification=specification::where('product_id',$id)->delete();
        return redirect()->route('producttable');
    }

    public function showupdateproduct($id)
    {
        //$data = producttable::find($id)->join('specification','product.id', '=', 'specification.product_id')->get();
        $data = producttable::join('specification','product.id', '=', 'specification.product_id')->where('product.id',$id)->get();
        $categorylist = category::all();
        $oslist = os::all();
        $displaylist = display::all();
        $processorlist = processor::all();
        $graphicslist = graphics::all();
        $memorylist = memory::all();
        $hard_drivelist = hard_drive::all();
        $power_supplylist = power_supply::all();
        $batterylist = battery::all();
        return view('admin.updateproducttable',compact('data','categorylist','oslist','displaylist','processorlist','graphicslist','memorylist','hard_drivelist','power_supplylist','batterylist'));
    }

    public function updateproduct(updateproductpostrequest $request, $id)
    {
        $data = producttable::find($id);

        $data->product_title = $request->product_name;
        $data->product_category_id = $request->category;
        $data->product_price = $request->price;
        $data->feature = $request->feature;
    
        $data->save();

        $specification = specification::where('product_id',$id)->first();
        $specification->os = $request->os;
        $specification->display = $request->display;
        $specification->processor = $request->processor;
        $specification->graphics = $request->graphics;
        $specification->battery = $request->battery;
        $specification->memory = $request->memory;
        $specification->hard_drive = $request->hard_drive;
        $specification->power_supply = $request->power_supply;
        //$specification->product_id = producttable::where('product_title', $request->product_name)->first()->id;

        $specification->save();
        return redirect()->route('producttable');
        //->withSuccess('Product Added Successfully')
    }

// customer view
    public function products()
    {   
        $data = specification::join ( 'product' , 'specification.product_id', '=', 'product.id')
                              ->join( 'os', 'specification.os', '=', 'os.id')
                              ->join( 'processor', 'specification.processor', '=', 'processor.id')
                              ->join( 'display', 'specification.display', '=', 'display.id')
                              ->join( 'graphics', 'specification.graphics', '=', 'graphics.id')
                              ->join( 'memory', 'specification.memory', '=', 'memory.id')
                              ->join( 'hard_drive', 'specification.hard_drive', '=', 'hard_drive.id')
                              ->join( 'power_supply', 'specification.power_supply', '=', 'power_supply.id')
                              ->join( 'battery', 'specification.battery', '=', 'battery.id')
                              ->join( 'category', 'category.id', '=', 'product.product_category_id')
                              ->orderBy("product.id")
                              ->select('product.id as product_id','product.product_title as product_title','category.category_name as category_name','product.product_price as product_price','product.feature as product_feature','product.image as product_image'
                              ,'os.name as os_name','display.name as display_name','processor.name as processor_name','graphics.name as graphics_name','battery.name as battery_name','power_supply.name as power_supply_name','hard_drive.name as hard_drive_name',
                              'memory.name as memory_name')
                              ->get();
        
        return view('store.index',compact('data'));
    }
    
    public function productdetails($id)
    {   
        $data = specification::join ( 'product' , 'specification.product_id', '=', 'product.id')
                              ->join( 'os', 'specification.os', '=', 'os.id')
                              ->join( 'processor', 'specification.processor', '=', 'processor.id')
                              ->join( 'display', 'specification.display', '=', 'display.id')
                              ->join( 'graphics', 'specification.graphics', '=', 'graphics.id')
                              ->join( 'memory', 'specification.memory', '=', 'memory.id')
                              ->join( 'hard_drive', 'specification.hard_drive', '=', 'hard_drive.id')
                              ->join( 'power_supply', 'specification.power_supply', '=', 'power_supply.id')
                              ->join( 'battery', 'specification.battery', '=', 'battery.id')
                              ->join( 'category', 'category.id', '=', 'product.product_category_id')
                              ->where('product.id',$id)
                              ->select('product.id as product_id','product.product_title as product_title','category.category_name as category_name','product.product_price as product_price','product.feature as product_feature','product.image as product_image'
                              ,'os.name as os_name','display.name as display_name','processor.name as processor_name','graphics.name as graphics_name','battery.name as battery_name','power_supply.name as power_supply_name','hard_drive.name as hard_drive_name',
                              'memory.name as memory_name')
                              ->get();
        
        return view('store.product',compact('data'));
    }
}