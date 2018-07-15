@extends('layouts.app')




@section('content')
<div class="container">
    <h2>Localização das PEV</h2>
    <input type="hidden" id="pevs" value="{{json_encode($pevs, true)}}">
    <div class="row">
        <div class="col-sm-12">
        <div id="map" style="height: 500px;"></div>
            
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
        let locations = JSON.parse($("#pevs").val());

        function initMap() {
          var myLatLng = {lat: -8.765113, lng: -63.884347};
  
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 13,
            center: myLatLng
          });
  
          for (i = 0; i < locations.length; i++) {
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i].latLong.split(",")[0], locations[i].latLong.split(",")[1]),
                    //position: myLatLng,
                    map: map,
                    title: locations[i].name,
                    label: locations[i].name
                });
            }
        }

      </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCY8OydRnSxbecVBCDrc0TjCGPGyougJx0&libraries=places&callback=initMap" async defer></script>
@endsection