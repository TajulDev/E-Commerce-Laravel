@extends('layouts.customer')

@section('contactsactive')
class="active"
@endsection

@section('indexcontent')

    <hr class="offset-top">

    <div class="white">
      <hr class="offset-sm">

      <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <div id="Address">
                <address>
                  <label class="h3">Unistore Pro, Inc.</label><br>
                  1305 Market Street, Suite 800<br>
                  San Francisco, CA 94102<br>
                  <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>

                <address>
                  <strong>Support</strong><br>
                  <a href="mailto:#">sup@example.com</a>
                  <br><br>

                  <strong>Partners</strong><br>
                  <a href="mailto:#">col@example.com</a>
                </address>
              </div>
            </div>
            <div class="col-sm-8">
              <div id="GoMap"></div>
            </div>
          </div>
      </div>

      <hr class="offset-lg">
    </div>

    <div class="gray">
      <hr class="offset-lg">

      <div class="container align-center">
        <h1 class="upp"> Need our help? </h1>
        <p> Please insert question to a form below. </p>
        <hr class="offset-md">

        <div class="row">
          <div class="col-sm-4 col-sm-offset-4">
            <form class="contact" action="index.php" method="post">
              <textarea class="form-control" name="message" placeholder="Message" required="" rows="5"></textarea>
              <br>

              <input type="email" name="email" value="" placeholder="E-mail" required="" class="form-control" />
              <br>

              <button type="submit" class="btn btn-primary justify"> Send question </button>
            </form>
          </div>
        </div>
      </div>
      <br>
    </div>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/core.js"></script>
    <script src="../assets/js/store.js"></script>

    <script type="text/javascript" src="../assets/js/custom-scroll/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript" src="../assets/js/jquery-ui-1.11.4.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.ui.touch-punch.js"></script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4aLLXYWiLslF54XA_w9m1IynlKd0-lyE&callback=initMap"></script>


    <script>
      function initMap() {
        var mapDiv = document.getElementById('GoMap');
        var markerLatLng = {lat: 37.77610833280797, lng: -122.41745173931122};

        var map = new google.maps.Map(mapDiv, {
            center: {lat: 37.77610833280797, lng: -122.41745173931122},
            zoom: 8
        });

         var marker = new google.maps.Marker({
          position: markerLatLng,
          map: map,
          title: 'Unistore'
        });


        // google.maps.event.addListener(map, "rightclick", function(event) {
        //     var lat = event.latLng.lat();
        //     var lng = event.latLng.lng();
        //     // populate yor box/field with lat, lng
        //     console.log("Lat=" + lat + "; Lng=" + lng);
        // });

      }
    </script>

  </body>
</html>
@endsection