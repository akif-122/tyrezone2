<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    // SHOW ADMIN TYRE ORDERS PAGE
    function orders()
    {

        $orderDetail = Order::with("user", "orderItem", "orderDetail", "orderItem.product", "orderItem.product.images")->get();
        // return $orderDetail;
        
        // return $orders;
        
        // $orders = OrderDetail::with("user")->get();
        // $products = Order::with("product", "product.manufacturer", "product.patteren")->get();
        // $orders["products"] = $products;
        $rejectedOrder = Order::where("order_status", "Rejected")->get();
        $notAvailableOrder = Order::where("order_status", "Not Available")->get();
        $invalidOrder = Order::where("order_status", "Invalid")->get();
        $confirmOrder = Order::where("order_status", "Confirmed")->get();
        // return $confirmOrder;
        $pendingOrder = Order::where("order_status", "Pending")->get();
        $deliveredOrder = Order::where("order_status", "Delivered")->get();
        // return $pendindOrder;
        // $orders = Order::with("product","orderDetail", "orderDetail.user")->get();
        // $orders = Order::with("orderDetail")->get();
        // $products = Product::get();

        // $orders = OrderDetail::with("order", "order.orderDetail")->get();
        // return $orders;
        // $orders = Order::with("orderDetail", "product", "user")->get();
        // return $orders;
        
        // return $orders;
        return view("admin.orders", [
            // "products"=> $products,
            "orders"=> $orderDetail,
            "pendingOrder" =>$pendingOrder, 
            "confirmOrder" => $confirmOrder, 
            "invalidOrder" => $invalidOrder, 
            "rejectedOrder" => $rejectedOrder, 
            "notAvailableOrder" => $notAvailableOrder, 
            "deliveredOrder" => $deliveredOrder, 
    ]);

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
