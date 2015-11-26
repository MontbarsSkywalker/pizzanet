@extends('layouts.main')
@section('body')
<div>
	<div>
		<a class="button expand" href="/restaurants/add">Agregar</a>
	</div>
</div>
<div class="row">
	<div class="columns small-12">
		<table>
			<caption>Restaurants</caption>
			<th>Direccion</th>
			<th>Menu</th>
			<th>Acciones</th>
			@foreach($restaurants as $restaurant)
			<td></td>
			<td></td>
			<td>
				<a href="/restaurants/{{$restaurant->id}}/edit">Edit</a>
			</td>
			@endforeach
		</table>
	</div>
</div>
@stop