<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Home extends Controller
{

    public function index(){
        $title = 'Home Page';
        return view('index', ['title' => $title]);
    }

}
