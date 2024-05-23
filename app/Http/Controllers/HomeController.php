<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $a = 5;
        $b = 10;
        return $a + $b;
    }
}
