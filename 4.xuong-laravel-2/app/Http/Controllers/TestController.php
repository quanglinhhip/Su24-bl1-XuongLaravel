<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        echo __CLASS__ . '@' . __FUNCTION__;
    }
}
