<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZodiacController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function result()
    {
        return view('result');
    }
}
