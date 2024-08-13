<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use Illuminate\Support\Facades\Storage;
// hihi
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const PATH_VIEW = 'brands.';
    public function index()
    {
        $data = Brand::query()->latest('id')->paginate(5);
        // dd($data);
        // die;
        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::PATH_VIEW . __FUNCTION__);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request)
    {

        // Lấy tất cả dữ liệu trừ trường 'image'
        $data = $request->except('image');
        // Kiểm tra xem file có được upload hay không
        if ($request->hasFile('image')) {
            //  Lưu file vào thư mục 'brands' và lấy đường dẫn tương đối
            $pathFile = Storage::putFile('brands', $request->file('image'));
            // Tạo đường dẫn công khai cho tệp
            $data['image'] = 'storage/' . $pathFile;
        }
        // dd($request->all());

        // Tạo bản ghi mới trong bảng 'brands' với dữ liệu đã có
        Brand::query()->create($data);

        return redirect()->route('brands.index')
            ->with('msg', 'Add successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        return view(self::PATH_VIEW . __FUNCTION__, compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view(self::PATH_VIEW . __FUNCTION__, compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        $data = $request->except('image');
        // Kiểm tra xem file có được upload hay không
        if ($request->hasFile('image')) {
            //  Lưu file vào thư mục 'brands' và lấy đường dẫn tương đối
            $pathFile = Storage::putFile('brands', $request->file('image'));
            // Tạo đường dẫn công khai cho tệp
            $data['image'] = 'storage/' . $pathFile;
        }
        // dd($request->all());
        $currentImage =  $brand->image;
        // Cập nhật bản ghi cụ thể với dữ liệu mới
        $brand->update($data);

        if ($request->hasFile('image') && $currentImage && file_exists(public_path($currentImage))) {
            unlink(public_path($currentImage));
        }
        return back()->with('msg', 'Update successful');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return back()->with('msg', 'Delete successfully');
    }
}
