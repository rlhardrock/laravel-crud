@extends('layouts.tempbase')

@section('crud-content')
<a href="animal/create" class="btn btn-primary">OTHER ANIMAL</a>

<table class="table table-dark table-striped mt-4">
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

@endsection
