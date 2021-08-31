@extends('layouts.tempbase')

@section('css')
<link hfer="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
@endsection

@section('crud-content')

<table id="animals" class="table table-borderer table-dark table-striped" style="width:100%">
    <thead>
        <tr>
            <th scope="col">ID</th>
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
            <td>{{$animal->id}}</td>
            <td>{{$animal->specie}}</td>
            <td>{{$animal->region}}</td>
            <td>{{$animal->biome}}</td>
            <td>{{$animal->country}}</td>
            <td>
                <form action="{{route('animal.destroy',$animal->id)}}" method="POST">

                    <a href="/animal/{{$animal->id}}/edit" class="btn btn-success">EDIT</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">REMOVE</button>

                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="animal/create" class="btn btn-primary mb-3">ANIMAL</a>

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#animals').DataTable({
                "lengthMenu": [[5,10,50,-1],[5,10,50,"All"]]
            });
        });
    </script>
@endsection

@endsection




