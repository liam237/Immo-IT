@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des biens</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($properties as $properties)
            <tr>
                <td>{{ $properties->title}}</td>
                <td>{{ $properties->address }}</td>
                <td>
                    <a href="{{ route('admin.properties.edit', $properties) }}" class="btn btn-primary">Modifier</a>
                    <form action="{{ route('admin.properties.destroy', $property) }}" method="POST"
                        style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
