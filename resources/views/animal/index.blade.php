@extends('adminlte::page')

@section('title', 'DashBoard')

@section('content_header')
    <h1>ANIMALS CONTROL</h1>
@stop

@section('content')
    <table id="animals" class="table table-hover table-borderer table-light table-striped" style="width:100%">
        <thead>
            <tr>
                {{-- <th scope="col">ID</th> --}}
                <th scope="col">SPECIE</th>
                <th scope="col">REGION</th>
                <th scope="col">BIOME</th>
                <th scope="col">COUNTRY</th>
                <th scope="col">ACTIONS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($animals as $animal)
                <tr>
                    {{-- <td>{{$animal->id}}</td> --}}
                    <td>{{$animal->specie}}</td>
                    <td>{{$animal->region}}</td>
                    <td>{{$animal->biome}}</td>
                    <td>{{$animal->country}}</td>
                    <td>
                    <form action="{{route('animal.destroy',$animal->id)}}" method="POST" class="form-destroy">

                        <a href="/animal/{{$animal->id}}/edit" class="btn btn-success"><i class="fas fa-edit"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="{{$animal->id}}" class="btn btn-danger"><i class="fas fa-eraser"></i></button>

                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="animal/create" class="btn btn-primary mb-3">+ ANIMAL</a>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link hfer="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap5.min.js"></script>
    {{-- <script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script> --}}
    <script>
        $(document).ready(function() {
            $('#animals').DataTable({
            select: true,
            select:{
                style: 'multi',
            },
                "lengthMenu": [[5,10,50,-1],[5,10,50,"All"]]
            });
        });
    </script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('Delete') == 'OK')
            <script>
                Swal.fire({
                    title:'Deleted!',
                    text:'The information has been deleted.',
                    icon:'success',
                    backdrop: `rgba(0,0,123,0.4)`}
                );
            </script>
    @endif

    <script>
        $('.form-destroy').submit(function(e){
            e.preventDefault();
            Swal.fire({
            title: 'Are you sure?',
            text: "You will not be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Eliminate!',
            backdrop: `rgba(0,0,123,0.4)`
            }).then((result) => {
                if (result.value) {
                    this.submit()
                    }
                }
            )
            });
    </script>
@stop
