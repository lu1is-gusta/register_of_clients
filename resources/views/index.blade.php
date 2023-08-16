@extends('layouts.layout')
@section('title', 'Home Page')
@section('content')
<div class="container-fluid">
    <h1>Customer List</h1>
    <div class="mt-3 mb-3">
        <a href="{{ route('client.create') }}">
            <button class="btn btn-success">Register</button>
        </a>
    </div>
    <div>
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $client)
                    <tr>
                        <th scope="row">{{$client->id}}</th>
                        <td>{{$client->name}}</td>
                        <<td>{{$client->telephone}}</td>
                        <td>{{$client->date_of_birth}}</td>
                        <td>{{$client->cpf}}</td>
                        <td>
                            <a href="{{ route('client.edit', $client->id) }}" class="btn btn-info"> Edit</a>

                            <a href="{{ route('delete', $client->id) }}" class="btn btn-danger">Delete</a>

                            <a href="{{ route('client.show', $client->id) }}" class="btn btn-success">Details</a>
                        </td>
                    </tr>
                @endforeach              
            </tbody>
        </table>
    </div>
</div>
@endsection