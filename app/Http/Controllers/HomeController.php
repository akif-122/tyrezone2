<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    function index(){
        $sizes = Size::get();

        return view("frontend.index", ["sizes" => $sizes]);
    }


}
