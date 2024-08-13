@extends('master')
@section('title')
    Category: {{ $category->name }}
@endsection
@section('content')
    {{-- @dd($category->toArray()) --}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="bg-primary text-white">FIELD NAME</th>
                <th class="bg-primary text-white">VALUE</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($category->toArray() as $field => $value)
                <tr>
                    <td>{{ Str::ucfirst($field) }}</td>
                    <td>
                        @if ($field == 'name')
                            {{ $category->name }}
                        @else
                            {{ $value }}
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <ul>
        @foreach ($category->toArray() as $column => $value)
            <li></li>
        @endforeach
    </ul> --}}
    <h2><a href="{{ route('categories.index') }}" class="btn btn-primary">Back</a></h2>
@endsection
