@extends('layouts.layout')

@section('content')
<div>
    @if ( session()->has('msg') )
        <div class="alert alert-success">
            {{ session()->get('msg') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr>
                    <td>{{ $author->id }} </td>
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->surname }}</td>
                    <td>
                        <a 
                         
                        class="btn btn-primary">Edit
                        </a>
                        <a 
                        
                        class="btn btn-danger">Delete
                        </a>
                </tr>
            @endforeach
        </tbody>
<h1> Home </h1>
</div>
@endsection