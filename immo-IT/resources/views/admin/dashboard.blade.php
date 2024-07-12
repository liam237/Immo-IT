@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tableau de bord de l'administrateur</h1>

    <!-- Lister les demandes reçues -->
    <div class="mt-4">
        <h2>Demandes reçues</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nom de la maison</th>
                    <th>Email</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Sujet</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($requests as $request)
                <tr>
                    <td>{{ $request->house_name }}</td>
                    <td>{{ $request->email }}</td>
                    <td>{{ $request->first_name }}</td>
                    <td>{{ $request->last_name }}</td>
                    <td>{{ $request->subject }}</td>
                    <td>{{ $request->message }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Gérer les biens immobiliers -->
    <div class="mt-4">
        <h2>Biens immobiliers</h2>
        <a href="{{ route('properties.create') }}" class="btn btn-success mb-2">Ajouter un bien</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>adresse</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($property as $properties)
                <tr>
                    <td>{{ $properties->title }}</td>
                    <td>{{ $properties->address }}</td>

                    <td>
                        <a href="{{ route('properties.edit', $properties->id) }}" class="btn btn-primary">Modifier</a>
                        <form action="{{ route('properties.destroy', $properties->id) }}" method="POST"
                            style="display: inline;">
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
</div>
@endsection
