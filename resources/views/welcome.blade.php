@extends('main.layout')
@section('body')
<div class="row">
	<div class="columns small-12">
    	<div id="googleMap" style="width:100%;height:600px;"></div>
    </div>
</div>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
  function initialize() {
      var mapProp = {
      	zoom:5,
      	mapTypeId:google.maps.MapTypeId.ROADMAP
      };
      var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
      if (navigator.geolocation) {
      	 navigator.geolocation.getCurrentPosition(function (position) {
        		 initialLocation = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
        		 map.setCenter(initialLocation);
      	 });
      }
      @foreach($restaurants as $restaurant)
      var myCenter=new google.maps.LatLng({{$restaurant->direccion_lat}},{{$restaurant->direccion_lon}});
      var marker=new google.maps.Marker({
      	position:myCenter,
    	animation:google.maps.Animation.BOUNCE,
    	url:'restaurants/'+{{$restaurant->id}}
      });
      marker.setMap(map);
      google.maps.event.addListener(marker, 'click', function(event) {
      	window.location.href=this.url;
      });
      @endforeach
  }
  google.maps.event.addDomListener(window, 'load', initialize);
</script>
@stop