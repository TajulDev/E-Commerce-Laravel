@extends('layouts.admin')

@section('admincontent')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Product Add </h3>
            </div>
            <div class="row">

              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    @foreach($data as $productrow)
                    <form class="form-sample" action="{{url('admin/updateproduct')}}/{{$productrow->product_id}}" method="post" enctype="multipart/form-data">
                    @csrf
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="productname">Product Name</label>
                            <input type="text" class="form-control" name="product_name" id="productname" value="{{$productrow->product_title}}">
                            @error('product_name')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control form-control-lg" name="category" id="category">
                            @foreach($categorylist as $row)
                              <option value= '{{$row->id}}' {{($productrow->product_category_id === $row->id) ? 'Selected' : ''}}>{{$row->category_name}}</option>
                            @endforeach
                            </select>
                            @error('category')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label class="feature">Feature</label>
                            <div class="col-sm-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="feature" id="featureyes" value="1" {{ ($productrow->feature=="1")? "checked" : "" }} >yes</label>
                              </div>
                            </div>
                            <div class="col-sm-5">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="feature" id="featureno" value="0" {{ ($productrow->feature=="0")? "checked" : "" }}>no</label>
                              </div>
                            </div>
                            @error('feature')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="">Price</label>
                            <input type="text" class="form-control" name="price" id="price" value="{{$productrow->product_price}}">
                            @error('price')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          
                        </div>
                        <div class="col-md-6">
                          <br>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block w-100" id="show_image" src="{{asset('asset/product')}}/{{$productrow->image}}" value="{{$productrow->image}}">
                              </div>
                            </div>  
                        </div>
                      </div>
                      <h4>Product Specification</h4><br>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="os">Operating System</label>
                            <select class="form-control form-control-lg" name="os" id="os">
                              <option disabled selected hidden>Select</option>
                              @foreach($oslist as $row)
                              <option value= '{{$row->id}}' {{($productrow->os === $row->id) ? 'Selected' : ''}}>{{$row->name}}</option>
                              @endforeach
                            </select>
                              @error('os')
                              <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="display">Display</label>
                            <select class="form-control form-control-lg" name="display" id="display">
                              <option disabled selected hidden>Select</option>
                              @foreach($displaylist as $row)
                              <option value= '{{$row->id}}' {{($productrow->display === $row->id) ? 'Selected' : ''}}>{{$row->name}}</option>
                              @endforeach
                            </select>
                              @error('display')
                                <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="processor">Processor</label>
                            <select class="form-control form-control-lg" name="processor" id="processor">
                              <option disabled selected hidden>Select</option>
                              @foreach($processorlist as $row)
                              <option value= '{{$row->id}}' {{($productrow->processor === $row->id) ? 'Selected' : ''}}>{{$row->name}}</option>
                              @endforeach
                            </select>
                              @error('processor')
                              <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                          </div> 
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="graphics">Graphics</label>
                            <select class="form-control form-control-lg" name="graphics" id="graphics">
                              <option disabled selected hidden>Select</option>
                              @foreach($graphicslist as $row)
                              <option value= '{{$row->id}}' {{($productrow->graphics === $row->id) ? 'Selected' : ''}}>{{$row->name}}</option>
                              @endforeach
                            </select>
                              @error('graphics')
                                <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="memory">Memory</label>
                            <select class="form-control form-control-lg" name="memory" id="memory">
                              <option disabled selected hidden>Select</option>
                              @foreach($memorylist as $row)
                              <option value= '{{$row->id}}' {{($productrow->memory === $row->id) ? 'Selected' : ''}}>{{$row->name}}</option>
                              @endforeach
                            </select>
                              @error('memory')
                                <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="hard_drive">Hard Drive</label>
                            <select class="form-control form-control-lg" name="hard_drive" id="hard_drive">
                              <option disabled selected hidden>Select</option>
                              @foreach($hard_drivelist as $row)
                              <option value= '{{$row->id}}' {{($productrow->hard_drive === $row->id) ? 'Selected' : ''}}>{{$row->name}}</option>
                              @endforeach
                            </select>
                              @error('hard_drive')
                                <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="power_supply">Power Supply</label>
                            <select class="form-control form-control-lg" name="power_supply" id="power_supply">
                              <option disabled selected hidden>Select</option>
                              @foreach($power_supplylist as $row)
                              <option value= '{{$row->id}}' {{($productrow->power_supply === $row->id) ? 'Selected' : ''}}>{{$row->name}}</option>
                              @endforeach
                            </select>
                              @error('power_supply')
                                <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="battery">Battery</label>
                            <select class="form-control form-control-lg" name="battery" id="battery">
                              <option disabled selected hidden>Select</option>
                              @foreach($batterylist as $row)
                              <option value= '{{$row->id}}' {{($productrow->battery === $row->id) ? 'Selected' : ''}}>{{$row->name}}</option>
                              @endforeach
                            </select>
                              @error('battery')
                                <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                      @endforeach
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection