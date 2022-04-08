<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Http\Requests\StorecustomerRequest;
use App\Http\Requests\UpdatecustomerRequest;
use Illuminate\Http\Request;
use Session;

class CustomerController extends Controller
{
    public Function customerLogin(){
        return view('pages.customer.customerLogin');
    }
    public Function customerLoginSubmitted(Request $request){
        $validate = $request->validate([
            'email'=>'required|max:50',
            'password'=> 'required'
        ],
        [
            'email.max'=>'E-mail can not be greater than 50 charcters'
        ]);
        $customer = Customer::where('email',$request->email)
                            ->where('password',$request->password)
                            ->first();
        if($customer){
            $request->session()->put('customer',$customer->name);
            return view('pages.customer.customerDashboard')->with('customer', $customer);
        }
        return back();
    }

    public Function customerRegistration(){
        return view('pages.customer.customerRegistration');
    }

    public Function customerRegistrationSubmitted(Request $request){
        $validate = $request->validate([
            'name'=>'required|min:10|max:50',
            'email'=>'email',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'password'=> 'required'
        ],
        [
            'name.required'=>'Please put your name',
            'name.min'=>'Name must be greater than 10 charcters',
            'name.max'=>'Name cannot be greater than 50 charcters',
        ]);
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phoneno = $request->phone;
        $customer->password = $request->password;
        $customer->save();

        if($customer){
            $request->session()->put('customer',$customer->name);

            return view('pages.customer.customerDashboard')->with('customer', $customer);
        }
        
    }

    public Function customerDashboard(){
        return view('pages.customer.customerDashboard');
    }

    public Function customerLogout(){
        session()->forget('customer');
        return redirect()->route('customerLogin');
    }

    public Function customerEdit(Request $request){
        $customer = Customer::where('id', $request->id)->first();
        return view('pages.customer.customerEdit')->with('customer',$customer);
    }

    public Function customerEditSubmitted(Request $request){
        $customer = Customer::where('id', $request->id)->first();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phoneno = $request->phone;
        $customer->password = $request->password;
        $customer->save();
        return view('pages.customer.customerDashboard')->with('customer',$customer);
    }
}
