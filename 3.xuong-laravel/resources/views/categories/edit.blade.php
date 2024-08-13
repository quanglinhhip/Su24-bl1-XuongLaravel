@extends('master')
@section('title')
    Update category: {{ $category->name }}
@endsection
@section('content')
    @if (session('msg'))
        <h2>{{ session('msg') }}</h2>
    @endif
    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" value="{{ $category->name }}" class="form-control">

        <button type="submit" class="btn btn-success mt-4">Edit</button>
        <h2><a href="{{ route('categories.index') }}" class="btn btn-primary mt-3">Back</a></h2>

    </form>
@endsection
