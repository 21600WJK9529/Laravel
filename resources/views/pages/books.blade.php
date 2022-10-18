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
<h1> Books </h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ISBN</th>
                    <th scope="col">Author ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Co-authors</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->ISBN }}</td>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->co_authors }}</td>
                        <td>
                            <a 
                            href="/updateBookRecord/{{ $book->id }}"
                            class="btn btn-primary">Edit
                            </a>
                            <a 
                            href="/deleteBook/{{ $book->id }}"
                            class="btn btn-danger">Delete
                            </a>
                    </tr>
                @endforeach
            </tbody>
        </div>
            @endsection