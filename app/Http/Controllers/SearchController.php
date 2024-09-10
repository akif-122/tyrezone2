<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    function search(Request $req)
    {

        $sizes = Size::get();

        // $products = Product::where("width", "like", "%$req->width%")->where("profile", "like", "%$req->profile%")->where("rim_size", "like", "%$req->rim_size%")->where("speed", "like", "%$req->speed%")->with("manufacturer", "patteren")->get();
        // $products = Product::where("tyre_size", "like", "% $req->width . '/'. $req->profile'. ' R' . $req->rim_size. '' . $req->speed %")->get();

        $qry = $req->width . "/" . $req->profile . " R" . $req->rim_size . " " . $req->speed;
        // return $qry;
        $products=[];
        $width = Product::where("tyre_size", "like", "%$req->width%")->where("tyre_size", "like", "%$req->profile%")->get();
        // $profile = Product::where("tyre_size", "like", "%$req->profile%")->get();
        // $rim = Product::where("tyre_size", "like", "%$req->rim_size%")->get();
        // $speed = Product::where("tyre_size", "like", "%$req->speed%")->get();
        // $products = Product::where('tyre_size', 'like', '%' . $req->width . '%')
        //     ->where('tyre_size', 'like', '%' . $req->profile . '%')
        //     ->where('tyre_size', 'like', '% R' . $req->rim_size . '%')
        //     ->where('tyre_size', 'like', '%' . $req->speed . '%')
        //     ->get();
        $products[] = $width;
        // $products[] = $profile;
        // $products[] = $rim;
        // $products[] = $speed;
        return $products[0];
        return view("frontend.search", ["sizes" => $sizes, "products" => $products[0]]);
    }
}
