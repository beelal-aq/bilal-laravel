<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistCon extends Controller
{
    public function index()
    {
        return view('Register.regist', [
            'title' => 'register'
        ]);
    }

    public function store()
    {
        return request()->all();
    }
}
