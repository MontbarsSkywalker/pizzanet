@extends('main.layout')
@section('body')

	<div class="row">
		<div class="columns small-6 small-centered">
			<h1>
				@section('title')
				Editar restaurant {{ $restaurant->id }}
				@show
			</h1>
		</div>
	</div>

	@section('form_declaration')
	<form method="post" action="/restaurants/edit">
	@show
		{!!  csrf_field() !!}
		@section('form_metadata')
		<input type="hidden" name="_method" value="put"/>
		@show
		<div class="row">
			<div class="columns small-12">
				<label>Telefono: <input type="tel" value="{{ $restaurant->tel }}" required /></label>
				<label>Direccion: <input type="text" value="{{ $restaurant->address }}" required /></label>
			</div>
		</div>
		<div class="row">
			<div class="columns small-6">
				<input type="submit" value="Guardar" class="button expand" />
			</div>
			<div class="columns small-6">
				<a href="/restaurants/" class="button secondary expand">Volver</a>
			</div>
		</div>
	</form>
@stop