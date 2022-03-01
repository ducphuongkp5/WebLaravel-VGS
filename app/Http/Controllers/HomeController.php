<?php

namespace App\Http\Controllers;

use App\Models\Truyen;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $truyen= Truyen::all();
        return view('home', compact('truyen'));
    }

    public function product()
    {
        return view('product-detail');
    }

}
