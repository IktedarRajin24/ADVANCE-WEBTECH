<?php

namespace App\Http\Controllers;

use App\Models\signup;
use App\Models\deliveryman;
use App\Http\Requests\StoresignupRequest;
use App\Http\Requests\UpdatesignupRequest;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public Function signUp(){
        return view('User.signUp');
    }

    public Function signUpSubmitted(Request $request){
        $validate = $request->validate([
            'name'=>'required|min:10|max:50',
            'email'=>'email',
            'address'=> 'required',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'password'=> 'required'
        ],
        [
            'name.required'=>'Please put your name',
            'name.min'=>'Name must be greater than 10 charcters',
            'name.max'=>'Name cannot be greater than 50 charcters',
        ]);
        $deliveryman = new deliveryman();
        $deliveryman->name = $request->name;
        $deliveryman->email = $request->email;
        $deliveryman->address = $request->address;
        $deliveryman->phone = $request->phone;
        $deliveryman->password = $request->password;
        $deliveryman->save();

        if($deliveryman){
            $request->session()->put('deliveryman',$deliveryman->name);

            return view('User.login');;
        }
        
    }
}
