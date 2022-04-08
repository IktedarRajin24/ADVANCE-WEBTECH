<?php

namespace App\Http\Controllers;
use App\Models\deliveryman;

use Illuminate\Http\Request;

class deliverymanControllerAPI extends Controller
{
    public function registration(Request $request)
    {
        $deliveryman = new deliveryman;
        $deliveryman -> name = $request->name;
        $deliveryman -> email = $request->email;
        $deliveryman -> address = $request->address;
        $deliveryman -> phone = $request->phone;
        $deliveryman -> password = $request->password;
        $deliveryman->save();

        
        return response()->json('Insert');
    }
}
