@extends('master')
@section('title')
    List Categories
@endsection
@section('content')
    <h3><a href="{{ route('categories.create') }}" class="btn btn-info mt-2">Add new </a></h3>
    @if (session('msg'))
        <h2>{{ session('msg') }}</h2>
    @endif

    <table class="table table-striped">
        <tr>
            <th class="bg-primary text-white">ID</th>
            <th class="bg-primary text-white">NAME</th>
            <th class="bg-primary text-white">CREATED AT</th>
            <th class="bg-primary text-white">UPDATED AT</th>
            <th class="bg-primary text-white">ACTION</th>
        </tr>
        @foreach ($data as $item)
            <tbody>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->updated_at }}</td>
                <td>
                    <a href="{{ route('categories.show', $item) }}" class="btn btn-info">Show </a>
                    <a href="{{ route('categories.edit', $item) }}" class="btn btn-warning">Edit </a>

                    <form action="{{ route('categories.destroy', $item) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                    </form>

                </td>
            </tbody>
        @endforeach

    </table>
    {{ $data->links() }}
@endsection
