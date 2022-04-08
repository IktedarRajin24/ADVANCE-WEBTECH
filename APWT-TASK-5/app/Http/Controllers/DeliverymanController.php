<?php

namespace App\Http\Controllers;

use App\Models\deliveryman;
use App\Http\Requests\StoredeliverymanRequest;
use App\Http\Requests\UpdatedeliverymanRequest;
use Illuminate\Http\Request;

class DeliverymanController extends Controller
{
    public Function dashboard(){
        $deliveryman = deliveryman::all()->first();
        return view('User.profile')->with('deliveryman',$deliveryman);
    }

    public Function deliverymanEdit(Request $request){
        $deliveryman = deliveryman::where('id', $request->id)->first();
        return view('User.deliverymanEdit')->with('deliveryman',$deliveryman);
    }

    public Function deliverymanEditSubmitted(Request $request){
        $deliveryman = deliveryman::where('id', $request->id)->first();
        $deliveryman->name = $request->name;
        $deliveryman->email = $request->email;
        $deliveryman->phone = $request->phone;
        $deliveryman->address = $request->address;
        $deliveryman->password = $request->password;
        $deliveryman->save();
        return view('User.profile')->with('deliveryman',$deliveryman);
    }

}
