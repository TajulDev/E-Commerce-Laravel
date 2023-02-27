@extends('layouts.admin')

@section('admincontent')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Product List </h3>
            </div>
            <div class="row">
            

              <div class=" grid-margin stretch-card overflow-auto">
                <div class="card overflow-auto">
                  <div class="card-body">
                    
                   <?php $i=0; ?>
                    <table class="table table-bordered text-center">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> Image </th>
                          <th> Product Title </th>
                          <th> Category </th>
                          <th> Feature </th>
                          <th> Operating System </th>
                          <th> Display </th>
                          <th> Processor </th>
                          <th> Graphics </th>
                          <th> Memory </th>
                          <th> Power Supply </th>
                          <th> Hard Drive </th>
                          <th> Battery </th>
                          <th> Price </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $row)
                        <tr>
                          <td> <?php echo ++$i ?> </td>
                          <td class="py-1">
                            <img src="{{asset('asset/product')}}/{{$row->product_image}}" alt="image" />
                          </td>
                          <td> {{$row->product_title}} </td>
                          <td> {{$row->category_name}}  </td>
                          <td> {{$row->product_feature}} </td>
                          <td> {{$row->os_name}} </td>
                          <td> {{$row->display_name}} </td>
                          <td> {{$row->processor_name}} </td>
                          <td> {{$row->graphics_name}} </td>
                          <td> {{$row->memory_name}} </td>
                          <td> {{$row->power_supply_name}} </td>
                          <td> {{$row->hard_drive_name}} </td>
                          <td> {{$row->battery_name}} </td>
                          <td> {{$row->product_price}} </td>
                          <td> <a href="{{route('updateproduct', [$row->product_id])}}">edit</a> <a href="{{route('removeproduct', [$row->product_id])}}">delete</a>  </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
@endsection