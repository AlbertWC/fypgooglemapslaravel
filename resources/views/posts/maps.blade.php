@extends('layouts.app')

@section('maps')
<div style="padding:10px">
    <div id="map"></div>
</div>

<style>          
    #map { 
      height: 300px;    
      width: 600px;            
    }          
  </style>    

<script type="text/javascript">
var map;

function initMap() {                            
    var latitude = 2.9300; // YOUR LATITUDE VALUE
    var longitude = 101.7774; // YOUR LONGITUDE VALUE
    
    var myLatLng = {lat: latitude, lng: longitude};
    
    map = new google.maps.Map(document.getElementById('map'), {
      center: myLatLng,
      zoom: 14,
      disableDoubleClickZoom: true, // disable map zoom on double click
    });
            
    var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      //title: 'Hello World'
      
      // setting latitude & longitude as title of the marker
      // title is shown when you hover over the marker
      title: latitude + ', ' + longitude 
    });    
    
    // Create new marker on double click event on the map
    // google.maps.event.addListener(map,'dblclick',function(event) {
    //     var marker = new google.maps.Marker({
    //       position: event.latLng, 
    //       map: map, 
    //       title: event.latLng.lat()+', '+event.latLng.lng()
    //     });                
    // });
    
    // Create new marker on single click event on the map
    google.maps.event.addListener(map,'click',function(event) {
        var marker = new google.maps.Marker({
          position: event.latLng, 
          map: map, 
          title: event.latLng.lat()+', '+event.latLng.lng()
        });                
    });
}
</script>




@endsection