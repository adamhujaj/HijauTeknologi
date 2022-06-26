<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controller_Staff extends Controller
{
    public function index()
    {
        return view('staff');
    }
}
