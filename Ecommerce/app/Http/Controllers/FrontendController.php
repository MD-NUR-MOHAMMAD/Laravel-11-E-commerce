<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('ministore.index');
    }
    public function admin()
    {
        return view('adminto.admin');
    }
}
