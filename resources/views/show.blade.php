@extends('layouts.layout')
@section('title', 'Home Page')
@section('content')
<div class="container-fluid">
    <h1>Detalhes do Cliente</h1>

    <table class="table table-striped">
        <tbody>
            <tr>
                <th scope="row">Nome:</th>
                <td>{{ $client->name }}</td>
            </tr>
            <tr>
                <th scope="row">Telefone:</th>
                <td>{{ $client->telephone }}</td>
            </tr>
            <tr>
                <th scope="row">Data de Nascimento:</th>
                <td>{{ $client->date_of_birth }}</td>
            </tr>
            <tr>
                <th scope="row">CPF:</th>
                <td>{{ $client->cpf }}</td>
            </tr>
            <tr>
                <th scope="row">Endereço:</th>
                <td>
                    {{ $client->address->road }},
                    {{ $client->address->number }},
                    {{ $client->address->city }},
                    {{ $client->address->state }},
                    {{ $client->address->country }}
                </td>
            </tr>
        </tbody>
    </table>

</div>
@endsection