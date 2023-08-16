@extends('layouts.layout')
@section('title', 'Delete')
@section('content')
    <div class="container-fluid">
        <form method="POST" action="{{ route('client.destroy', [$client->id]) }}">
            @csrf
            @method('DELETE')
            
            <h1>Are you sure you want to delete this customer ?</h1>

            <input class="btn btn-danger" type="submit" value="Delete">
        </form>
    </div>
@endsection