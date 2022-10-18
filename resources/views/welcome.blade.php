@extends('layouts.layout')

@section('content')
<div>
    @if ( session()->has('msg') )
        <div class="alert alert-success">
            {{ session()->get('msg') }}
        </div>
    @endif
    @if( session()->has('error') )
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
    @endif

    <h1> Authors </h1>
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
                        href="/updateRecord/{{ $author->id }}"
                        class="btn btn-primary">Edit
                        </a>
                        <a 
                        href="/delete/{{ $author->id }}"
                        class="btn btn-danger">Delete
                        </a>
                </tr>
            @endforeach
        </tbody>
</div>
@endsection