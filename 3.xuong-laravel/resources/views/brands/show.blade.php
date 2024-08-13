@extends('master')
@section('title')
    Detail Brand: {{ $brand->name }}
@endsection

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <td class="bg-primary text-white">FIELD NAME</td>
                <td class="bg-primary text-white">VALUE</td>
            </tr>
        </thead>

        <tbody>
            {{-- Lặp qua từng cặp field-value trong mảng chuyển đổi từ đối tượng $brand --}}
            @foreach ($brand->toArray() as $field => $value)
                <tr>
                    <td>{{ Str::ucfirst($field) }}</td>
                    @if ($field == 'image')
                        <td><img src="{{ asset($brand->image) }}" alt="" width="100px"></td>
                    @else
                        {{-- hiển thị giá trị bình thường --}}
                        <td>{{ $value }}</td>
                    @endif


                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('brands.index') }}" class="btn btn-primary">Back</a>
@endsection
