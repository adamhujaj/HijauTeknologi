<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controller_Owner extends Controller
{
    public function index()
    {
        return view('owner');
    }
}
