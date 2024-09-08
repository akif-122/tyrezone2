<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    // SHOW ADMIN TYRE ORDERS PAGE
    function orders()
    {
        // $orders = OrderDetail::with("user")->get();
        // $products = Order::with("product", "product.manufacturer", "product.patteren")->get();
        // $orders["products"] = $products;
        $orders = Order::with("product","orderDetail", "orderDetail.user")->get();
        // return $orders;
        return view("admin.orders", ["orders"=> $orders]);

    }


    function orderStatus(Request $req){

        $order = Order::where("id", $req->id)->first();
        $order->order_status = $req->status;

        $order->save();

        return response()->json([
            $req->input()
        ]);
    }
    
}
