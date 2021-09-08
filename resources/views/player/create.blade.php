@extends('adminlte::page')

@section('title', 'DashBoard')

@section('content_header')
    <h1>PLAYER INSCRIPTION</h1>
@stop


@section('content')
    {{-- {{ route('avengers.store')}} --}}
    <form action="/player" method="POST" class="form-created" enctype="multipart/form-data">
        @csrf
    <!-- component -->
        <div class="flex h-screen bg-gray-200 items-center justify-center  mt-32 mb-32">
            <div class="grid bg-white rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2">

                <div class="grid grid-cols-1">
                    <label class="form-label text-500 font-semibold">Name</label>
                    <input class="form-control" type="text" name="name" id="name" />
                </div>
                <div class="grid grid-cols-1">
                    <label class="form-label text-500 font-semibold">Surname</label>
                    <input class="form-control" type="text" name="surname" id="surname" />
                </div>
                <div class="grid grid-cols-1">
                    <label class="form-label text-500 font-semibold">E-Mail</label>
                    <input class="form-control" type="text" name="email" id="email" />
                </div>
                <div class="grid grid-cols-1">
                    <label class="form-label text-500 font-semibold">Cellphone</label>
                    <input class="form-control" type="text" name="cellphone" id="cellphone" />
                </div>
                <div class="grid grid-cols-1">
                    <label class="form-label text-500 font-semibold">City</label>
                    <input class="form-control" type="text" name="city" id="city" />
                </div>
                <div class="grid grid-cols-1">
                    <label class="form-label text-500 font-semibold">Profession</label>
                    <input class="form-control" type="text" name="profession" id="profession" />
                </div>
                <div class="grid grid-cols-1">
                    <label class="form-label text-500 font-semibol">University</label>
                    <input class="form-control" type="text" name="university" id="university" />
                </div>
                <div class="grid grid-cols-1">
                    <label class="form-label text-500 font-semibol">Team</label>
                    <input class="form-control" type="text" name="team" id="team" />
                </div>
                <div class="grid grid-cols-1">
                    <label class="form-label text-500 font-semibol">Position</label>
                    <input class="form-control" type="text" name="position" id="position" />
                </div>
                <div class="grid grid-cols-1">
                    <label class="form-label text-500 font-semibol">Alias</label>
                    <input class="form-control" type="text" name="alias" id="alias" />
                </div>
                <div class="grid grid-cols-1">
                    <label class="form-label text-500 font-semibol">Inscription</label>
                    <input class="form-control" type="date" name="inscription" id="inscription" />
                </div>
                <div class="grid grid-cols-1">
                    <label class="form-label text-500 font-semibol">Status</label>
                    <input class="form-control" type="checkbox" name="status" id="status" />
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

                <div>
                    <br>

                    <button type="submit" onclick="creature()" class="btn btn-success" tabindex="5">ACCEPT</button>
                    <a href="/player" class="btn btn-warning" tabindex="6">DECLINE</a>
                    <button type="reset" class="btn btn-primary" tabindex="7">RESET</button>

                </div>
            </div>
        </div>
    </form>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function creature(){
        Swal.fire({
                title:'Created!',
                text:'The Player has been created!',
                icon:'success',
                backdrop: `rgba(5, 34, 134, 0.5)`
            }
        );
    }
</script>

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
