@extends('layouts.customer')

@section('indexcontent')

    <hr class="offset-lg">
    <hr class="offset-lg">
    <hr class="offset-lg hidden-xs">
    @foreach($data as $row)
    <section class="product">
      <div class="container">
        <div class="row">
          <div class="col-sm-7 white sm-padding">
            <hr class="offset-sm visible-xs">

            <h2 class="h1">{{$row->product_title}}</h2>
            <br>

             <h2>Product specifications</h2>
             <br>

              <div class="row specification">
                <div class="col-sm-4"> <label>Operating system</label> </div>
                <div class="col-sm-8"> <p>{{$row->os_name}}</p> </div>
              </div>

              <div class="row specification">
                <div class="col-sm-4"> <label>Display</label> </div>
                <div class="col-sm-8">
                  <p> {{$row->display_name}}</p>
                </div>
              </div>
              
              <div class="row specification">
                <div class="col-sm-4"> <label>Processor</label> </div>
                <div class="col-sm-8"> <p>{{$row->processor_name}}</p> </div>
              </div>

              <div class="row specification">
                <div class="col-sm-4"> <label>Graphics</label> </div>
                <div class="col-sm-8"> <p>{{$row->graphics_name}}</p> </div>
              </div>

              <div class="row specification">
                <div class="col-sm-4"> <label>Memory</label> </div>
                <div class="col-sm-8"> <p>{{$row->memory_name}}</p> </div>
              </div>

              <div class="row specification">
                <div class="col-sm-4"> <label>Hard drive</label> </div>
                <div class="col-sm-8"> <p> {{$row->hard_drive_name}} </p> </div>
              </div>

              <div class="row specification">
                <div class="col-sm-4"> <label>Power supply</label> </div>
                <div class="col-sm-8"> <p> {{$row->power_supply_name}} </p> </div>
              </div>

              <div class="row specification">
                <div class="col-sm-4"> <label>Battery</label> </div>
                <div class="col-sm-8"> <p> {{$row->battery_name}}</p> </div>
              </div>

              <hr class="offset-lg">
          </div>
          <div class="col-sm-5 no-padding-xs">
            <div class="caption">
              <img src="{{asset('asset/product')}}/{{$row->product_image}}" alt="Microsoft Surface Studio" style="height: 430px;width: 430px;"/>
              <h3>{{$row->product_title}}</h3>

              <p> &middot; OS {{$row->os_name}}</p>
              <p> &middot; {{$row->display_name}} Display</p>
              <p> &middot; {{$row->processor_name}}</p>
              <hr class="offset-md hidden-sm">
              <hr class="offset-sm visible-sm">
              <hr class="offset-xs visible-sm">

              <p class="price">PRICE TK. {{$row->product_price}}</p>
              <hr class="offset-md">

              <button class="btn btn-primary rounded"> <i class="ion-bag"></i> Add to cart</button>
              <button class="btn btn-link"> <i class="ion-ios-heart"></i> See later </button>
            </div>
            <hr class="offset-sm hidden-xs">         
          </div>
        </div>
      </div>
    </section>
    @endforeach
    <hr class="offset-lg">

    <section class="products">
      <div class="container">
        <h2 class="upp align-center-xs"> Related products </h2>
        <hr class="offset-lg">

        <div class="row">

          <!-- <div class="col-sm-4 col-md-3 product">
            <div class="body">
              <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
              <a href="./"><img src="../assets/img/products/apple-imac-27-retina.jpg" alt="Apple iMac 27 Retina"/></a>

              <div class="content align-center">
                <p class="price">$2099.99</p>
                <h2 class="h3">iMac 27 Retina</h2>
                <hr class="offset-sm">

                <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
              </div>
            </div>
          </div>  -->

      </div>
    </section>