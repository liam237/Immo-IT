@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Demandes de contact</h1>
    <table class="table">
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
            @foreach($requests as $request)
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
@endsection
