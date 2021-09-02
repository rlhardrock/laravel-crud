@extends('adminlte::page')

@section('title', 'DashBoard')

@section('content_header')
    <h1>ANIMAL EDIT INFORMATION</h1>
@stop

@section('content')

<form action="/animal/{{$animal->id}}" method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Specie</label>
        <input class="form-control" value="{{$animal->specie}}" type="text" name="specie" id="specie" tabindex="1">
    </div>
    <div class="mb-3">
        <label class="form-label">Region</label>
        <input class="form-control" value="{{$animal->region}}" type="text" name="region" id="region" tabindex="2">
    </div>
    <div class="mb-3">
        <label class="form-label">Biome</label>
        <input class="form-control" value="{{$animal->biome}}" type="text" name="biome" id="biome" tabindex="3">
    </div>
    <div class="mb-3">
        <label class="form-label">Country</label>
        <input class="form-control" value="{{$animal->country}}" type="text" name="country" id="country" tabindex="4">
    </div>
    <br>

        <button type="submit" class="btn btn-success" tabindex="5">UPDATE</button>
        <a href="/animal" class="btn btn-warning" tabindex="6">DECLINE</a>
        <button type="reset" class="btn btn-primary" tabindex="7">RESET</button>

</form>

@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
