<?php

namespace App\Http\Controllers;

use App\Models\Size;
use App\Models\StripeSetting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    function index(){
        
        $sizes = Size::get();

        $settings = StripeSetting::first();
        if ($settings) {
            \Stripe\Stripe::setApiKey($settings->stripe_secret_key);
        }

        return view("frontend.index", ["sizes" => $sizes]);
    }


}
