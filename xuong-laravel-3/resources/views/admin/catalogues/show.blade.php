@extends('admin.layouts.master')
@section('title')
    Detail Catalog: {{$model->name}}
@endsection

@section('content')
    <table>
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        @foreach($model ->toArray() as $key =>$value)
            <tr>
                <td>{{ $key }}</td> <!-- Hiển thị tên của trường -->
                <td>
                    @php
                        // Kiểm tra nếu khóa là 'cover', thì hiển thị hình ảnh
                        if ($key == 'cover') {
                            // Tạo URL từ giá trị của trường 'cover' bằng cách sử dụng Storage facade
                            $url = \Storage::url($value);
                            // Echo thẻ <img> với URL hình ảnh và chiều rộng 50px
                            echo "<img src=\"$url\" alt=\"\" width=\"50px\">";

                        // Kiểm tra nếu khóa chứa chuỗi 'is_', hiển thị nhãn YES hoặc NO
                        } elseif (\Illuminate\Support\Str::contains($key, 'is_')) {
                            // Nếu giá trị là true, hiển thị nhãn YES, nếu không hiển thị nhãn NO
                            echo $value
                                ? '<span class="badge bg-primary">YES</span>'
                                : '<span class="badge bg-danger">NO</span>';
                        } else {
                            // Nếu không phải là trường 'cover' và không chứa 'is_', chỉ hiển thị giá trị
                            echo $value;
                        }
                    @endphp
                </td>

            </tr>
        @endforeach
    </table>
@endsection
