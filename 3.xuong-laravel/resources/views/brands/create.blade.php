@extends('master')
@section('title')
    Add brand
@endsection

@section('content')
    <form action="{{ route('brands.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">Name: </label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="mb-3 mt-3">
            <label for="image" class="form-label"> Image: </label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Add</button>
        <a href="{{ route('brands.index') }}" class="btn btn-primary">Back</a>
    </form>
@endsection
