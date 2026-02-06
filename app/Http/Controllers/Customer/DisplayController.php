<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DisplayController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function product()
    {
        return view('product');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function service()
    {
        return view('services');
    }

    //
}
