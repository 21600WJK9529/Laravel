@extends('layouts.layout')

@section('content')
<h1> Create </h1>

<form action="{{ route('add.book') }}" method="POST">
    @csrf
    <label for="ISBN">ISBN:</label><br>
    <input type="text" id="ISBN" name="ISBN" value="{{ old('ISBN') }}"><br>
    @error ('ISBN')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="id">Author ID:</label><br>
    <input type="text" id="id" name="id" value="{{ old('id') }}"><br>
    @error ('id')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title" value="{{ old('title') }}"><br>
    @error ('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="co_authors" >Co-authors:</label><br>
    <input type="text" id="co_authors" name="co_authors" value="{{ old('co_authors') }}"><br>
    @error ('co_authors')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <input type="submit" value="Submit">
</form>

@endsection