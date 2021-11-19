<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function regis(){
        return view('regisShop');
    }
    public function inform(){
        return view('information');
    }
}
?>