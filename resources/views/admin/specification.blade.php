@extends("layouts.admin")

@section("admincontent")
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Update Specification & Category</h3>
            </div>
            
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Category Table</h4>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th width="10%"> SL no. </th>
                          <th width="30%"> Category Title </th>
                          <th width="40%"> Update Title </th>
                          <th width="20%"> Status </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $id=0; ?>
                        @foreach($categorydata as $row)
                        <tr>
                        <form class="forms-sample" action="{{url('admin/updatecategory')}}/{{$row->id}}" method="post">
                        @csrf
                          <td width="10%"><?php echo ++$id; ?>  </td>
                          <td width="30%"> {{$row->category_name}} </td>
                          <td width="40%"><input type="text" class="form-control" id="updatecategory" name="updatecategory" required >                              
                          @error('updatecategory')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          </td>
                          <td width="20%"><button type="submit" class="badge badge-warning">Update</button>  <a href="{{route('removecategory', [$row->id])}}" class="badge badge-danger">Remove</label></td>
                        </form>
                        </tr>
                        @endforeach  
                        <tr>
                          <form class="forms-sample" action="{{url('admin/addcategory')}}" method="post">
                            @csrf
                          <td width="10%"> <?php echo ++$id; ?>  </td>
                          <td width="70%" colspan='2'><input type="text" class="form-control" name="addcategory" id="addcategory" placeholder="Add new Category">
                          @error('addcategory')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          </td>
                          <td width="20%"><button type="submit" class="badge badge-success">  Add New </button></td>
                          </form>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>        
            </div>

            <!--OS-->

            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Operating System Table</h4>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th width="10%"> SL no. </th>
                          <th width="30%"> Operating System Title </th>
                          <th width="40%"> Update Title </th>
                          <th width="20%"> Status </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $id=0; ?>
                        @foreach($osdata as $row)
                        <tr>
                        <form class="forms-sample" action="{{url('admin/updateos')}}/{{$row->id}}" method="post">
                        @csrf
                          <td width="10%"> <?php echo ++$id; ?> </td>
                          <td width="30%"> {{$row->name}} </td>
                          <td width="40%"><input type="text" class="form-control" id="updateos" name="updateos" required >
                          @error('updateos')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          </td>
                          <td width="20%"><button type="submit" class="badge badge-warning">Update</button>  <a href="{{route('removeos', [$row->id])}}" class="badge badge-danger">Remove</label></td>
                        </form>  
                        </tr>
                        @endforeach  
                        <tr>
                          <form class="forms-sample" action="{{url('admin/addos')}}" method="post">
                            @csrf
                          <td width="10%"> <?php echo ++$id; ?> </td>
                          <td width="70%" colspan='2'><input type="text" class="form-control" name="addos" id="addos" placeholder="Add new OS">
                          @error('addos')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          </td>
                          <td width="20%"><button type="submit" class="badge badge-success">  Add New </button></td>
                          </form>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>        
            </div>

            <!--DISPLAY-->

            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Display Table</h4>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th width="10%"> SL no. </th>
                          <th width="30%"> Display Title </th>
                          <th width="40%"> Update Title </th>
                          <th width="20%"> Status </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $id=0; ?>
                        @foreach($displaydata as $row)
                        <tr>
                        <form class="forms-sample" action="{{url('admin/updatedisplay')}}/{{$row->id}}" method="post">
                        @csrf
                          <td width="10%"> <?php echo ++$id; ?> </td>
                          <td width="30%"> {{$row->name}} </td>
                          <td width="40%"><input type="text" class="form-control" id="updatedisplay" name="updatedisplay" required >
                          @error('updatedisplay')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          </td>
                          <td width="20%"><button type="submit" class="badge badge-warning">Update</button>  <a href="{{route('removedisplay', [$row->id])}}" class="badge badge-danger">Remove</label></td>
                        </form>  
                        </tr>
                        @endforeach  
                        <tr>
                          <form class="forms-sample" action="{{url('admin/adddisplay')}}" method="post">
                            @csrf
                          <td width="10%"> <?php echo ++$id; ?> </td>
                          <td width="70%" colspan='2'><input type="text" class="form-control" name="adddisplay" id="adddisplay" placeholder="Add new DISPLAY">
                          @error('adddisplay')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          </td>
                          <td width="20%"><button type="submit" class="badge badge-success">  Add New </button></td>
                          </form>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>        
            </div>  
            
            <!--PROCESSOR-->

            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Processor Table</h4>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th width="10%"> SL no. </th>
                          <th width="30%"> Processor Title </th>
                          <th width="40%"> Update Title </th>
                          <th width="20%"> Status </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $id=0; ?>
                        @foreach($processordata as $row)
                        <tr>
                        <form class="forms-sample" action="{{url('admin/updateprocessor')}}/{{$row->id}}" method="post">
                        @csrf
                          <td width="10%"> <?php echo ++$id; ?> </td>
                          <td width="30%"> {{$row->name}} </td>
                          <td width="40%"><input type="text" class="form-control" id="updateprocessor" name="updateprocessor" required >
                          @error('updateprocessor')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          </td>
                          <td width="20%"><button type="submit" class="badge badge-warning">Update</button>  <a href="{{route('removeprocessor', [$row->id])}}" class="badge badge-danger">Remove</label></td>
                        </form>  
                        </tr>
                        @endforeach  
                        <tr>
                          <form class="forms-sample" action="{{url('admin/addprocessor')}}" method="post">
                            @csrf
                          <td width="10%"> <?php echo ++$id; ?> </td>
                          <td width="70%" colspan='2'><input type="text" class="form-control" name="addprocessor" id="addprocessor" placeholder="Add new processor">
                          @error('addprocessor')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          </td>
                          <td width="20%"><button type="submit" class="badge badge-success">  Add New </button></td>
                          </form>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>        
            </div> 
            
            <!--GRAPHICS-->

            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Graphics Table</h4>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th width="10%"> SL no. </th>
                          <th width="30%"> Graphics Title </th>
                          <th width="40%"> Update Title </th>
                          <th width="20%"> Status </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $id=0; ?>
                        @foreach($graphicsdata as $row)
                        <tr>
                        <form class="forms-sample" action="{{url('admin/updategraphics')}}/{{$row->id}}" method="post">
                        @csrf
                          <td width="10%"> <?php echo ++$id; ?> </td>
                          <td width="30%"> {{$row->name}} </td>
                          <td width="40%"><input type="text" class="form-control" id="updategraphics" name="updategraphics" required >
                          @error('updategraphics')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          </td>
                          <td width="20%"><button type="submit" class="badge badge-warning">Update</button>  <a href="{{route('removegraphics', [$row->id])}}" class="badge badge-danger">Remove</label></td>
                        </form>  
                        </tr>
                        @endforeach  
                        <tr>
                          <form class="forms-sample" action="{{url('admin/addgraphics')}}" method="post">
                            @csrf
                          <td width="10%"> <?php echo ++$id; ?> </td>
                          <td width="70%" colspan='2'><input type="text" class="form-control" name="addgraphics" id="addgraphics" placeholder="Add new graphics">
                          @error('addgraphics')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          </td>
                          <td width="20%"><button type="submit" class="badge badge-success">  Add New </button></td>
                          </form>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>        
            </div>
            
            <!--memory-->

            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Memory Table</h4>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th width="10%"> SL no. </th>
                          <th width="30%"> Memory Title </th>
                          <th width="40%"> Update Title </th>
                          <th width="20%"> Status </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $id=0; ?>
                        @foreach($memorydata as $row)
                        <tr>
                        <form class="forms-sample" action="{{url('admin/updatememory')}}/{{$row->id}}" method="post">
                        @csrf
                          <td width="10%"> <?php echo ++$id; ?> </td>
                          <td width="30%"> {{$row->name}} </td>
                          <td width="40%"><input type="text" class="form-control" id="updatememory" name="updatememory" required >
                          @error('updatememory')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          </td>
                          <td width="20%"><button type="submit" class="badge badge-warning">Update</button>  <a href="{{route('removememory', [$row->id])}}" class="badge badge-danger">Remove</label></td>
                        </form>  
                        </tr>
                        @endforeach  
                        <tr>
                          <form class="forms-sample" action="{{url('admin/addmemory')}}" method="post">
                            @csrf
                          <td width="10%"> <?php echo ++$id; ?> </td>
                          <td width="70%" colspan='2'><input type="text" class="form-control" name="addmemory" id="addmemory" placeholder="Add new memory">
                          @error('addmemory')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          </td>
                          <td width="20%"><button type="submit" class="badge badge-success">  Add New </button></td>
                          </form>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>        
            </div>

            <!--hard_drive-->

            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Hard Drive Table</h4>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th width="10%"> SL no. </th>
                          <th width="30%"> Hard Drive Title </th>
                          <th width="40%"> Update Title </th>
                          <th width="20%"> Status </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $id=0; ?>
                        @foreach($hard_drivedata as $row)
                        <tr>
                        <form class="forms-sample" action="{{url('admin/updatehard_drive')}}/{{$row->id}}" method="post">
                        @csrf
                          <td width="10%"> <?php echo ++$id; ?> </td>
                          <td width="30%"> {{$row->name}} </td>
                          <td width="40%"><input type="text" class="form-control" id="updatehard_drive" name="updatehard_drive" required >
                          @error('updatehard_drive')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          </td>
                          <td width="20%"><button type="submit" class="badge badge-warning">Update</button>  <a href="{{route('removehard_drive', [$row->id])}}" class="badge badge-danger">Remove</label></td>
                        </form>  
                        </tr>
                        @endforeach  
                        <tr>
                          <form class="forms-sample" action="{{url('admin/addhard_drive')}}" method="post">
                            @csrf
                          <td width="10%"> <?php echo ++$id; ?> </td>
                          <td width="70%" colspan='2'><input type="text" class="form-control" name="addhard_drive" id="addhard_drive" placeholder="Add new hard_drive">
                          @error('addhard_drive')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          </td>
                          <td width="20%"><button type="submit" class="badge badge-success">  Add New </button></td>
                          </form>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>        
            </div>
            
            <!--power_supply-->

            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Power Supply Table</h4>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th width="10%"> SL no. </th>
                          <th width="30%"> Power Supply Title </th>
                          <th width="40%"> Update Title </th>
                          <th width="20%"> Status </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $id=0; ?>
                        @foreach($power_supplydata as $row)
                        <tr>
                        <form class="forms-sample" action="{{url('admin/updatepower_supply')}}/{{$row->id}}" method="post">
                        @csrf
                          <td width="10%"> <?php echo ++$id; ?> </td>
                          <td width="30%"> {{$row->name}} </td>
                          <td width="40%"><input type="text" class="form-control" id="updatepower_supply" name="updatepower_supply" required >
                          @error('updatepower_supply')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          </td>
                          <td width="20%"><button type="submit" class="badge badge-warning">Update</button>  <a href="{{route('removepower_supply', [$row->id])}}" class="badge badge-danger">Remove</label></td>
                        </form>  
                        </tr>
                        @endforeach  
                        <tr>
                          <form class="forms-sample" action="{{url('admin/addpower_supply')}}" method="post">
                            @csrf
                          <td width="10%"> <?php echo ++$id; ?> </td>
                          <td width="70%" colspan='2'><input type="text" class="form-control" name="addpower_supply" id="addpower_supply" placeholder="Add new power_supply">
                          @error('addpower_supply')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          </td>
                          <td width="20%"><button type="submit" class="badge badge-success">  Add New </button></td>
                          </form>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>        
            </div>            

            <!--battery-->

            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Battery Table</h4>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th width="10%"> SL no. </th>
                          <th width="30%"> Battery Title </th>
                          <th width="40%"> Update Title </th>
                          <th width="20%"> Status </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $id=0; ?>
                        @foreach($batterydata as $row)
                        <tr>
                        <form class="forms-sample" action="{{url('admin/updatebattery')}}/{{$row->id}}" method="post">
                        @csrf
                          <td width="10%"> <?php echo ++$id; ?> </td>
                          <td width="30%"> {{$row->name}} </td>
                          <td width="40%"><input type="text" class="form-control" id="updatebattery" name="updatebattery" required >
                          @error('updatebattery')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          </td>
                          <td width="20%"><button type="submit" class="badge badge-warning">Update</button>  <a href="{{route('removebattery', [$row->id])}}" class="badge badge-danger">Remove</label></td>
                        </form>  
                        </tr>
                        @endforeach  
                        <tr>
                          <form class="forms-sample" action="{{url('admin/addbattery')}}" method="post">
                            @csrf
                          <td width="10%"> <?php echo ++$id; ?> </td>
                          <td width="70%" colspan='2'><input type="text" class="form-control" name="addbattery" id="addbattery" placeholder="Add new battery">
                          @error('addbattery')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          </td>
                          <td width="20%"><button type="submit" class="badge badge-success">  Add New </button></td>
                          </form>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>        
            </div>
            
          </div>
@endsection