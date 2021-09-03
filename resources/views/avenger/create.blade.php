@extends('adminlte::page')

@section('title', 'DashBoard')

@section('content_header')
    <h1>ANIMAL INSCRIPTION</h1>
@stop


@section('content')

{{--
<form action="/avenger" method="POST" class="form-created" enctype="multipart/form-data">

    @csrf

    <div class="mb-3">
        <label class="form-label">Name</label>
        <input class="form-control"type="text" name="name" id="name" tabindex="1">
    </div>
    <div class="mb-3">
        <label class="form-label">Bioma</label>
        <input class="form-control"type="text" name="bioma" id="bioma" tabindex="2">
    </div>
    <div class="mb-3">
        <label class="form-label">Region</label>
        <input class="form-control"type="text" name="region" id="region" tabindex="3">
    </div>
    <div class="mb-3">
        <label class="form-label">Conservation</label>
        <input class="form-control"type="text" name="conservation" id="conservation" tabindex="4">
    </div>
    <div class="mb-3">
        <label class="form-label">Scientific</label>
        <input class="form-control"type="text" name="scientific" id="scientific" tabindex="4">
    </div>
    <div class="mb-3">
        <label class="form-label">Family</label>
        <input class="form-control"type="text" name="family" id="family" tabindex="4">
    </div>
    <div class="mb-3">
        <label class="form-label">Orden</label>
        <input class="form-control"type="text" name="orden" id="orden" tabindex="4">
    </div>
    <div class="mb-3">
        <label class="form-label">Photograph</label>
        <input class="form-control"type="text" name="photograph" id="photograph" tabindex="4">
    </div>
 --}}

    <div class="min-h-screen flex items-center justify-center bg-blue-100 py-12 px-4 sm:px-6 lg:px-8">

    <img  style="border:20px;margin:50px;float:left;width:300px;height: 300px;" class="object-cover" src="https://images.unsplash.com/photo-1464746133101-a2c3f88e0dd9?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1327&q=80">
     <hr>

    <div class="max-w-md w-full space-y-8">

      <form action="/avenger" method="POST" class="form-created" enctype="multipart/form-data">


        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input class="form-control"type="text" name="name" id="name" tabindex="1">
                </div>
                <div class="mb-3">
                    <label class="form-label">Bioma</label>
                    <input class="form-control"type="text" name="bioma" id="bioma" tabindex="2">
                </div>
                <div class="mb-3">
                    <label class="form-label">Region</label>
                    <input class="form-control"type="text" name="region" id="region" tabindex="3">
                </div>
                <div class="mb-3">
                    <label class="form-label">Conservation</label>
                    <input class="form-control"type="text" name="conservation" id="conservation" tabindex="4">
                </div>
                <div class="mb-3">
                    <label class="form-label">Scientific</label>
                    <input class="form-control"type="text" name="scientific" id="scientific" tabindex="4">
                </div>
            </div>

            <div class="text-sm">
                <div class="mb-3">
                    <label class="form-label">Family</label>
                    <input class="form-control"type="text" name="family" id="family" tabindex="4">
                </div>
                <div class="mb-3">
                    <label class="form-label">Orden</label>
                    <input class="form-control"type="text" name="orden" id="orden" tabindex="4">
                </div>
                <div class="mb-3">
                    <label class="form-label">Photograph</label>
                    <input class="form-control"type="text" name="photograph" id="photograph" tabindex="4">
                </div>
            </div>
        </div>

        <div>
            <br>

            <button type="submit" onclick="creature()" class="btn btn-success" tabindex="5">CREATE</button>
            <a href="/avenger" class="btn btn-warning" tabindex="6">DECLINE</a>
            <button type="reset" class="btn btn-primary" tabindex="7">RESET</button>

        </div>
      </form>
    </div>
  </div>





</form>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function creature(){
        Swal.fire({
                title:'Created!',
                text:'The Animal has been created!',
                icon:'success',
                backdrop: `rgba(49, 172, 29 , 0.5)`
            }
        );
    }
</script>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
