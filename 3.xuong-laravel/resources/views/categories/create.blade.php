@extends('master')
@section('title')
    Add new category
@endsection
@section('content')
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control">

        <button type="submit" class="btn btn-success mt-4">Add</button>
    </form>
@endsection
