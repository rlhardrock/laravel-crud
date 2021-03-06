@extends('adminlte::page')

@section('title', 'DashBoard')

@section('content_header')
    <h1>ANIMAL INSCRIPTION</h1>
@stop


@section('content')

<form action="/animal" method="POST" class="form-created">

    @csrf

    <div class="mb-3">
        <label class="form-label">Specie</label>
        <input class="form-control"type="text" name="specie" id="specie" tabindex="1">
    </div>
    <div class="mb-3">
        <label class="form-label">Region</label>
        <input class="form-control"type="text" name="region" id="region" tabindex="2">
    </div>
    <div class="mb-3">
        <label class="form-label">Biome</label>
        <input class="form-control"type="text" name="biome" id="biome" tabindex="3">
    </div>
    <div class="mb-3">
        <label class="form-label">Country</label>
        <input class="form-control"type="text" name="country" id="country" tabindex="4">
    </div>
    <br>

        <button type="submit" onclick="creature()" class="btn btn-success" tabindex="5">CREATE</button>
        <a href="/animal" class="btn btn-warning" tabindex="6">DECLINE</a>
        <button type="reset" class="btn btn-primary" tabindex="7">RESET</button>

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
