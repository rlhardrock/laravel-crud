@extends('adminlte::page')

@section('title', 'DashBoard')

@section('content_header')
    <h1>ANIMAL INSCRIPTION</h1>
@stop


@section('content')
    {{-- {{ route('avengers.store')}} --}}
    <form action="/avenger" method="POST" class="form-created" enctype="multipart/form-data">
        @csrf
    <!-- component -->
        <div class="flex h-screen bg-gray-200 items-center justify-center  mt-32 mb-32">
            <div class="grid bg-white rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2">

                <div class="grid grid-cols-1">
                    <label class="form-label text-500 font-semibold">Name</label>
                    <input class="form-control"type="text" name="name" id="name" />
                </div>
                <div class="grid grid-cols-1">
                    <label class="form-label text-500 font-semibold">Bioma</label>
                    <input class="form-control" type="text" name="bioma" id="bioma" />
                </div>
                <div class="grid grid-cols-1">
                    <label class="form-label text-500 font-semibold">Region</label>
                    <input class="form-control"type="text" name="region" id="region" />
                </div>
                <div class="grid grid-cols-1">
                    <label class="form-label text-500 font-semibold">Scientific</label>
                    <input class="form-control"type="text" name="scientific" id="scientific" />
                </div>
                <div class="grid grid-cols-1">
                    <label class="form-label text-500 font-semibold">Family</label>
                    <input class="form-control"type="text" name="family" id="family" />
                </div>
                <div class="grid grid-cols-1">
                    <label class="form-label text-500 font-semibold">Orden</label>
                    <input class="form-control"type="text" name="orden" id="orden" />
                </div>
                <div class="grid grid-cols-1">
                    <label class="form-label text-500 font-semibol">Conservation Status</label>
                    <p>
                    Extinct (EX) / Extinct in the Wild (EW) / Critically Endangered (CR) /
                    Endangered (EN) / Vulnerable (VU) / Near Threatened (NT) / Least Concern (LC) /
                    Extinct in the Wild (EW) / Data Deficient (DD) / Not Evaluated (NE)
                    </p>
                    <input class="form-control"type="text" name="conservation" id="conservation" />
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

                    <button type="submit" onclick="creature()" class="btn btn-success" tabindex="5">CREATE</button>
                    <a href="/avenger" class="btn btn-warning" tabindex="6">DECLINE</a>
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
                text:'The Animal has been created!',
                icon:'success',
                backdrop: `rgba(49, 172, 29 , 0.5)`
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
