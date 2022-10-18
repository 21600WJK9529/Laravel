@extends('layouts.layout')

@section('content')
<div>
@if($author == null)
    <div class="alert alert-danger">
        Author not found with id {{ $author->id }}
    </div>
@else
    <h1> Update Author </h1>
    <form action="{{ url('/update/'.$author->id) }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $author->id }}">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="{{ $author->name }}"><br>
        @error ('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="surname">Surname:</label><br>
        <input type="text" id="surname" name="surname" value="{{ $author->surname }}"><br>
        @error ('surname')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="submit" value="Submit">
    </form>
@endif
</div>


@endsection