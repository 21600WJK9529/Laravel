@extends('layouts.layout')

@section('content')
<h1> Create </h1>
<!--
Create a form to create a new author
The form will be sent to the route /create_author
The form will be sent using the POST method
The form will be sent to the controller method createAuthor
-->
<form action="{{ route('add.author') }}" method="POST">
    @csrf
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" value="{{ old('name') }}"><br>
    @error ('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <label for="surname">Surname:</label><br>
    <input type="text" id="surname" name="surname" value="{{ old('surname') }}"><br>
    @error ('surname')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input type="submit" value="Submit">
</form>

@endsection