@extends('adminlte::page')

@section('title', 'DashBoard')

@section('content_header')
    <h1>ROSTER LIST</h1>
@stop

@section('content')
    <table id="players" class="table table-hover table-borderer table-light table-striped" style="width:100%">
        <thead>
            <tr>
                {{-- <th scope="col">ID</th> --}}
                <th scope="col">NAME</th>
                <th scope="col">SURNAME</th>
                {{-- <th scope="col">EMAIL</th> --}}
                {{-- <th scope="col">CELLPHONE</th> --}}
                {{-- <th scope="col">CITY</th> --}}
                <th scope="col">PROFESSION</th>
                {{-- <th scope="col">UNIVERSITY</th> --}}
                <th scope="col">TEAM</th>
                {{-- <th scope="col">POSITION</th> --}}
                <th scope="col">ALIAS</th>
                {{-- <th scope="col">INSCRIPTION</th> --}}
                <th scope="col">STATUS</th>
                <th scope="col">PLAYER</th>
                <th scope="col">ACTIONS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($players as $player)
                <tr>
                    {{-- <td>{{$player->id}}</td> --}}
                    <td>{{$player->name}}</td>
                    <td>{{$player->surname}}</td>
                    {{-- <td>{{$player->email}}</td> --}}
                    {{-- <td>{{$player->cellphone}}</td> --}}
                    {{-- <td>{{$player->city}}</td> --}}
                    <td>{{$player->profession}}</td>
                    {{-- <td>{{$player->university}}</td> --}}
                    <td>{{$player->team}}</td>
                    {{-- <td>{{$player->position}}</td> --}}
                    <td>{{$player->alias}}</td>
                    {{-- <td>{{$player->inscription}}</td> --}}
                    <td>{{$player->status}}</td>
                    <td>
                        <img src="/photograph/{{$player->photograph}}" width="150px" height="150px"/>
                    </td>
                    <td>
                    <form action="{{route('player.destroy',$player->id)}}" method="POST" class="form-destroy">

                        <a href="/player/{{$player->id}}/edit" class="btn btn-success"><i class="fas fa-user-cog"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="{{$player->id}}" class="btn btn-danger"><i class="fas fa-user-injured"></i></button>

                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="player/create" class="btn btn-primary mb-3">+ PLAYER</a>


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
            $('#players').DataTable({
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
                    backdrop: `rgba(0,0,123,0.4)`},
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
            backdrop: `rgba(43, 76, 189, 0.5)`
            }).then((result) => {
                if (result.value) {
                    this.submit()
                    }
                }
            )
            });
    </script>
@stop
