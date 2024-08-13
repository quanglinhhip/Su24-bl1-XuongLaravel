@extends('master')
@section('title')
    List Brands
@endsection
@section('content')
    <h1><a href="{{ route('brands.create') }}" class="btn btn-success">Add new Brand</a></h1>
    @if (session('msg'))
        <h2>{{ session('msg') }}</h2>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="bg-primary text-white">ID</th>
                <th class="bg-primary text-white">NAME</th>
                <th class="bg-primary text-white">IMAGE</th>
                <th class="bg-primary text-white">CREATED AT</th>
                <th class="bg-primary text-white">UPDATED AT</th>
                <th class="bg-primary text-white">ACTION</th>
            </tr>
        </thead>


        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td><img src="{{ asset($item->image) }}" alt="anh san pham" width="100px"></td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                    <td>
                        <a href="{{ route('brands.show', $item) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('brands.edit', $item) }}" class="btn btn-info">Edit</a>
                        <form action="{{ route('brands.destroy', $item) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure want to delete?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
@endsection
