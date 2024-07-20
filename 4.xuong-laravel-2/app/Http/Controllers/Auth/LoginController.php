<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showFormLogin()
    {
        return view('auth/login');
    }

    public function login(Request $request)
    {
        // dd(request()->all());
        // Validate the user's credentials
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            //Attempt:nhận 2 tham số,
            //1.Giá trị dùng để tìm kiếm trong db->xác thực xem acc đó có exist in db or not?
            // 2. remember(luu giu trang thai dang nhap)

            // Regenerate the session
            $request->session()->regenerate();

            // Redirect the user to the intended dashboard
            return redirect()->intended('/home');
            //đăng nhập xong, quay trở lại trang trước đó(vd: cartpage->login->cartpage)
            // không tìm được trang trước đó->intended đến trang chỉ định
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email'); //suport cho old value -> nhap sai->khong can nhap lai
    }
    public function logout()
    {
        Auth::logout();
        \request()->session()->invalidate(); //invalidate: del all session tren he thong va reset toan bo
        return redirect('/auth/login'); //về trang đăng nhập sau khi đăng xuất
    }
}