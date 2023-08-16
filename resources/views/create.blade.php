@extends('layouts.layout')
@section('title', 'create')
@section('content')
    <div class="container-fluid">
        <div class="col-md-6">
            <h1>Create Client</h1>
        </div>
        <form method="POST" action="{{ route('client.store') }}">
            @csrf
            
            <div class="form-group">
                <label for="name">Name:</label> <br>
                <input type="text" class="form-control" id="name" name="name"> <br>
            </div>

            <div class="form-group">
                <label for="telephone">Telephone:</label> <br>
                <input type="text" class="form-control" id="telephone" name="telephone"> <br>
            </div>

            <div class="form-group">
                <label for="date_of_birth">Date of Birth:</label> <br>
                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth"> <br>
            </div>

            <div class="form-group">
                <label for="cpf">CPF:</label> <br>
                <input type="text" class="form-control" id="cpf" name="cpf"> <br>
            </div>

            <div class="form-group">
                <label for="tipo_endereco">Road:</label>
                <input type="text" class="form-control" id="road" name="road">
            </div>

            <div class="form-group">
                <label for="tipo_endereco">Number:</label>
                <input type="text" class="form-control" id="number" name="number">
            </div>

            <div class="form-group">
                <label for="tipo_endereco">City:</label>
                <input type="text" class="form-control" id="city" name="city">
            </div>

            <div class="form-group">
                <label for="tipo_endereco">State:</label>
                <input type="text" class="form-control" id="state" name="state">
            </div>

            <div class="form-group">
                <label for="tipo_endereco">Country:</label>
                <input type="text" class="form-control" id="country" name="country">
            </div>

            <input class="btn btn-success" type="submit" value="Create">
        </form>
    </div>

@endsection