<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\os;
use App\Models\display;
use App\Models\processor;
use App\Models\graphics;
use App\Models\memory;
use App\Models\hard_drive;
use App\Models\power_supply;
use App\Models\battery;

use Illuminate\Http\Request;

class SpecificationController extends Controller
{

    public function show(category $category,os $os)
    {
        $categorydata = category::all();
        $osdata = os::all();
        $displaydata = display::all();
        $processordata = processor::all();
        $graphicsdata = graphics::all();
        $memorydata = memory::all();
        $hard_drivedata = hard_drive::all();
        $power_supplydata = power_supply::all();
        $batterydata = battery::all();
        return view('admin.specification',compact('categorydata','osdata','displaydata','processordata','graphicsdata','memorydata','hard_drivedata','power_supplydata','batterydata' ));

    }

    //category crud

    public function addcategory(Request $request)
    {
    
        $validated = $request->validate([
            'addcategory' => 'required',
        ], [
            'addcategory.required' => 'Give a category name',
        ]);
        
        $category = new category;
        
        $category->category_name = $request->addcategory;
        $category->save();
        return redirect()->route('specification');
    }

    public function deletecategory($id)
    {
        $categorydata = category::find($id);
        $categorydata->delete();
        return redirect()->route('specification');
    }

    public function updatecategory(Request $request,$id)
    {
        $validated = $request->validate([
            'updatecategory' => 'required'
        ]);
        $categorydata = category::find($id);
        $categorydata->category_name=$request->updatecategory;
        $categorydata->save();

        return redirect()->route('specification');

    }

    //os crud

    public function addos(Request $request)
    {
    
        $validated = $request->validate([
            'addos' => 'required',
        ], [
            'addos.required' => 'Give a operating system name',
        ]);
        
        $os = new os;
        
        $os->name = $request->addos;
        $os->save();
        return redirect()->route('specification');
    }

    public function deleteos($id)
    {
        $osdata = os::find($id);
        $osdata->delete();
        return redirect()->route('specification');
    }
    
    public function updateos(Request $request,$id)
    {
        $validated = $request->validate([
            'updateos' => 'required'
        ]);
        $osdata = os::find($id);
        $osdata->name=$request->updateos;
        $osdata->save();

        return redirect()->route('specification');

    }

    //display crud

    public function adddisplay(Request $request)
    {
    
        $validated = $request->validate([
            'adddisplay' => 'required',
        ], [
            'adddisplay.required' => 'Give a display name',
        ]);
        
        $display = new display;
        
        $display->name = $request->adddisplay;
        $display->save();
        return redirect()->route('specification');
    }

    public function deletedisplay($id)
    {
        $displaydata = display::find($id);
        $displaydata->delete();
        return redirect()->route('specification');
    }
    
    public function updatedisplay(Request $request,$id)
    {
        $validated = $request->validate([
            'updatedisplay' => 'required'
        ]);
        $displaydata = display::find($id);
        $displaydata->name=$request->updatedisplay;
        $displaydata->save();

        return redirect()->route('specification');

    }

    //processor

    public function addprocessor(Request $request)
    {
    
        $validated = $request->validate([
            'addprocessor' => 'required',
        ], [
            'addprocessor.required' => 'Give a processor name',
        ]);
        
        $processor = new processor;
        
        $processor->name = $request->addprocessor;
        $processor->save();
        return redirect()->route('specification');
    }

    public function deleteprocessor($id)
    {
        $processordata = processor::find($id);
        $processordata->delete();
        return redirect()->route('specification');
    }
    
    public function updateprocessor(Request $request,$id)
    {
        $validated = $request->validate([
            'updateprocessor' => 'required'
        ]);
        $processordata = processor::find($id);
        $processordata->name=$request->updateprocessor;
        $processordata->save();

        return redirect()->route('specification');

    }

    //graphics

    public function addgraphics(Request $request)
    {
    
        $validated = $request->validate([
            'addgraphics' => 'required',
        ], [
            'addgraphics.required' => 'Give a graphics name',
        ]);
        
        $graphics = new graphics;
        
        $graphics->name = $request->addgraphics;
        $graphics->save();
        return redirect()->route('specification');
    }

    public function deletegraphics($id)
    {
        $graphicsdata = graphics::find($id);
        $graphicsdata->delete();
        return redirect()->route('specification');
    }
    
    public function updategraphics(Request $request,$id)
    {
        $validated = $request->validate([
            'updategraphics' => 'required'
        ]);
        $graphicsdata = graphics::find($id);
        $graphicsdata->name=$request->updategraphics;
        $graphicsdata->save();

        return redirect()->route('specification');

    }

    //memory

    public function addmemory(Request $request)
    {
    
        $validated = $request->validate([
            'addmemory' => 'required',
        ], [
            'addmemory.required' => 'Give a memory name',
        ]);
        
        $memory = new memory;
        
        $memory->name = $request->addmemory;
        $memory->save();
        return redirect()->route('specification');
    }

    public function deletememory($id)
    {
        $memorydata = memory::find($id);
        $memorydata->delete();
        return redirect()->route('specification');
    }
    
    public function updatememory(Request $request,$id)
    {
        $validated = $request->validate([
            'updatememory' => 'required'
        ]);
        $memorydata = memory::find($id);
        $memorydata->name=$request->updatememory;
        $memorydata->save();

        return redirect()->route('specification');

    }

    //hard_drive

    public function addhard_drive(Request $request)
    {
    
        $validated = $request->validate([
            'addhard_drive' => 'required',
        ], [
            'addhard_drive.required' => 'Give a hard_drive name',
        ]);
        
        $hard_drive = new hard_drive;
        
        $hard_drive->name = $request->addhard_drive;
        $hard_drive->save();
        return redirect()->route('specification');
    }

    public function deletehard_drive($id)
    {
        $hard_drivedata = hard_drive::find($id);
        $hard_drivedata->delete();
        return redirect()->route('specification');
    }
    
    public function updatehard_drive(Request $request,$id)
    {
        $validated = $request->validate([
            'updatehard_drive' => 'required'
        ]);
        $hard_drivedata = hard_drive::find($id);
        $hard_drivedata->name=$request->updatehard_drive;
        $hard_drivedata->save();

        return redirect()->route('specification');

    }

    //power_supply

    public function addpower_supply(Request $request)
    {
    
        $validated = $request->validate([
            'addpower_supply' => 'required',
        ], [
            'addpower_supply.required' => 'Give a power_supply name',
        ]);
        
        $power_supply = new power_supply;
        
        $power_supply->name = $request->addpower_supply;
        $power_supply->save();
        return redirect()->route('specification');
    }

    public function deletepower_supply($id)
    {
        $power_supplydata = power_supply::find($id);
        $power_supplydata->delete();
        return redirect()->route('specification');
    }
    
    public function updatepower_supply(Request $request,$id)
    {
        $validated = $request->validate([
            'updatepower_supply' => 'required'
        ]);
        $power_supplydata = power_supply::find($id);
        $power_supplydata->name=$request->updatepower_supply;
        $power_supplydata->save();

        return redirect()->route('specification');

    }

    //battery

    public function addbattery(Request $request)
    {
    
        $validated = $request->validate([
            'addbattery' => 'required',
        ], [
            'addbattery.required' => 'Give a battery name',
        ]);
        
        $battery = new battery;
        
        $battery->name = $request->addbattery;
        $battery->save();
        return redirect()->route('specification');
    }

    public function deletebattery($id)
    {
        $batterydata = battery::find($id);
        $batterydata->delete();
        return redirect()->route('specification');
    }
    
    public function updatebattery(Request $request,$id)
    {
        $validated = $request->validate([
            'updatebattery' => 'required'
        ]);
        $batterydata = battery::find($id);
        $batterydata->name=$request->updatebattery;
        $batterydata->save();

        return redirect()->route('specification');

    }

}
