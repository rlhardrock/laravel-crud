@extends('adminlte::page')

@section('title', 'DashBoard')

@section('content_header')
    <h1>ANIMAL EDIT INFORMATION</h1>
@stop

@section('content')

<form action="/avenger/{{$avenger->id}}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Name</label>
        <input class="form-control" value="{{$avenger->name}}" type="text" name="name" id="name" tabindex="1">
    </div>
    <div class="mb-3">
        <label class="form-label">Bioma</label>
        <input class="form-control" value="{{$avenger->bioma}}" type="text" name="bioma" id="bioma" tabindex="2">
    </div>
    <div class="mb-3">
        <label class="form-label">Region</label>
        <input class="form-control" value="{{$avenger->region}}" type="text" name="region" id="region" tabindex="3">
    </div>
    <div class="mb-3">
        <label class="form-label">Conservation</label>
        <input class="form-control" value="{{$avenger->conservation}}" type="text" name="conservation" id="conservation" tabindex="4">
    </div>
    <div class="mb-3">
        <label class="form-label">Scientific</label>
        <input class="form-control" value="{{$avenger->scientific}}" type="text" name="scientific" id="scientific" tabindex="3">
    </div>
    <div class="mb-3">
        <label class="form-label">Family</label>
        <input class="form-control" value="{{$avenger->family}}" type="text" name="family" id="family" tabindex="3">
    </div>
    <div class="mb-3">
        <label class="form-label">Orden</label>
        <input class="form-control" value="{{$avenger->orden}}" type="text" name="orden" id="orden" tabindex="3">
    </div>

    <div class="grid grid-cols-1">
        <label class="form-label text-500 font-semibold">Photograph</label>
        <div class='flex items-center justify-center w-full'>
            <div class="grid grid-cols-1">
                <img id="photoSelected" style="max-height: 350px" />
            </div>
            <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                <input name="photograph" id="photograph" type='file' class="hidden" />
            </label>
        </div>
    </div>
    <br>

        <button type="submit" class="btn btn-success" tabindex="5">UPDATE</button>
        <a href="/avenger" class="btn btn-warning" tabindex="6">DECLINE</a>
        <button type="reset" class="btn btn-primary" tabindex="7">RESET</button>

</form>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function(e){
        $('#photograph').change(function(){
            let reader = new FileReader();
            reader.onload = (e) =>{
                $('#photoSelected').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>

@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
