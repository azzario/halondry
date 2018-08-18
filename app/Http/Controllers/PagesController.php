<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //fungsi menuju halaman pages.index
    public function index()
    {
        return view('pages.index');
    }
}
