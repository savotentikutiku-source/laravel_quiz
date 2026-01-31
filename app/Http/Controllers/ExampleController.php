<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    //テスト画面の表示
    public function index()
    {
        return view('test.example');
    }
}
