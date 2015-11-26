@extends('main.layout')
@section('body')
<div class="row">
	<div class="columns small-12">
    	<h1>Restaurant {{$restaurant->id}}<h1>
    </div>
</div>
<div class="row">
	<div class="columns small-12">
    	<span>Latitud: {{$restaurant->direccion_lat}}<span>
    	<span>Longitud: {{$restaurant->direccion_lon}}<span>
    </div>
</div>
@stop