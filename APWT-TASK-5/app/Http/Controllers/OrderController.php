<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Http\Requests\StoreorderRequest;
use App\Http\Requests\UpdateorderRequest;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public Function orderDetails(){
        $orders = Order::all();
        return view('order.orderDetails')->with('orders',$orders);
    }

    public function orderConfirm(Request $request){

        $order = order::where('id', $request->id)->first();
        $order->delete();

        return redirect()->route('orderDetails');
    }


}
