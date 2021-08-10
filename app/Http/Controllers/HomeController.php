<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index($name = null){
        $hello = 'hello from mmm';
        return view('home')->with([
            'hello' => $hello,
            'name' => $name
        ]);
    }
}