<?php

namespace App\Http\Controllers;
use App\Order;
use App\Product;
use App\OrderDetail;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
              
    }
    
    public function getOrder(){
        $orders = Order::all();
          return response()->json($orders);
    }

    public function orderByProduct(Request $req)
    {

    } 
}
