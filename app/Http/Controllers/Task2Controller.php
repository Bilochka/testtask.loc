<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Task2Controller extends Controller
{
    public function index()
    {
        if (view()->exists('test2')) {
            return view('test2');
        }
    }
}
