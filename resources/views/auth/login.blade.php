@extends('main.layout')
@section('body')
<form method="POST" action="/auth/login">
    {!! csrf_field() !!}

    <div class="row"><div class="columns small-6 small-centered">
        Email:
        <input type="email" name="email" value="{{ old('email') }}">
    </div></div>

    <div class="row"><div class="columns small-6 small-centered">
        Password:
        <input type="password" name="password" id="password">
    </div></div>

    <div class="row"><div class="columns small-6 small-centered">
        <input type="checkbox" name="remember"> Remember Me
    </div></div>

    <div class="row"><div class="columns small-6 small-centered">
        <input type="submit" class="button expand" value="Log in"/>
    </div></div>

</form>
@stop