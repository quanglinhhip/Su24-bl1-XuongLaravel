@extends('master')
@section('title')
    Edit brand: {{ $brand->name }}
@endsection

@section('content')
    @if (session('msg'))
        <h2>{{ session('msg') }}</h2>
    @endif
    <form action="{{ route('brands.update', $brand) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">Name: </label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $brand->name }}">
        </div>
        <div class="mb-3 mt-3">
            <label for="image" class="form-label"> Image: </label>
            <input type="file" name="image" id="image" class="form-control">
            <img src="{{ asset($brand->image) }}" alt="anh san pham" width="100px">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('brands.index') }}" class="btn btn-primary">Back</a>
    </form>
@endsection
