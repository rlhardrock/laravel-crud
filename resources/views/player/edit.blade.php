@extends('adminlte::page')

@section('title', 'DashBoard')

@section('content_header')
    <h1>PLAYER UPDATE INFORMATION</h1>
@stop

@section('content')

<form action="/player/{{$player->id}}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Name</label>
        <input class="form-control" value="{{$player->name}}" type="text" name="name" id="name" tabindex="1">
    </div>
    <div class="mb-3">
        <label class="form-label">Surname</label>
        <input class="form-control" value="{{$player->surname}}" type="text" name="surname" id="surname" tabindex="2">
    </div>
    <div class="mb-3">
        <label class="form-label">E-Mail</label>
        <input class="form-control" value="{{$player->email}}" type="text" name="email" id="email" tabindex="3">
    </div>
    <div class="mb-3">
        <label class="form-label">Cellphone</label>
        <input class="form-control" value="{{$player->cellphone}}" type="text" name="cellphone" id="cellphone" tabindex="4">
    </div>
    <div class="mb-3">
        <label class="form-label">City</label>
        <input class="form-control" value="{{$player->city}}" type="text" name="city" id="city" tabindex="3">
    </div>
    <div class="mb-3">
        <label class="form-label">Profession</label>
        <input class="form-control" value="{{$player->profession}}" type="text" name="profession" id="profession" tabindex="3">
    </div>
    <div class="mb-3">
        <label class="form-label">University</label>
        <input class="form-control" value="{{$player->university}}" type="text" name="university" id="university" tabindex="3">
    </div>
    <div class="mb-3">
        <label class="form-label">Team</label>
        <input class="form-control" value="{{$player->team}}" type="text" name="team" id="team" tabindex="3">
    </div>
    <div class="mb-3">
        <label class="form-label">Position</label>
        <input class="form-control" value="{{$player->position}}" type="text" name="position" id="position" tabindex="3">
    </div>
    <div class="mb-3">
        <label class="form-label">Alias</label>
        <input class="form-control" value="{{$player->alias}}" type="text" name="alias" id="alias" tabindex="3">
    </div>
    <div class="mb-3">
        <label class="form-label">Inscription</label>
        <input class="form-control" value="{{$player->inscription}}" type="date" name="inscription" id="inscription" tabindex="3">
    </div>
    <div class="mb-3">
        <label class="form-label">Status</label>
        <input class="form-control" value="{{$player->status}}" type="text" name="status" id="status" tabindex="3">
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

        <button type="submit" class="btn btn-success" tabindex="5">ACCEPT</button>
        <a href="/player" class="btn btn-warning" tabindex="6">DECLINE</a>
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
