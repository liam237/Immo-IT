@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des biens immobiliers</h1>
    <a href="{{ route('properties.create') }}" class="btn btn-primary">Ajouter un bien</a>
    <table class="table">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Adresse</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($properties as $property)
            <tr>
                <td>{{ $property->title }}</td>
                <td>{{ $property->location }}</td>
                <td>{{ $property->description }}</td>
                <td>
                    @if($property->image_path)
                    <img src="{{ asset('storage/' . $property->image_path) }}" alt="{{ $property->title }}" width="100">
                    @endif
                </td>
                <td>
                    <a href="{{ route('properties.edit', $property->id) }}" class="btn btn-warning">Modifier</a>
                    <form action="{{ route('properties.destroy', $property->id) }}" method="POST"
                        style="display:inline-block;">
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
