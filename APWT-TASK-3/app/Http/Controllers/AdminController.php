<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\customer;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Http\Request;
use Session;

class AdminController extends Controller
{
    public Function adminLogin(){
        return view('pages.admin.adminLogin');
    }
    public Function adminLoginSubmitted(Request $request){
        $validate = $request->validate([
            'email'=>'required|max:50',
            'password'=> 'required'
        ],
        [
            'email.max'=>'E-mail can not be greater than 50 charcters'
        ]);
        $admin = Admin::where('email',$request->email)
                            ->where('password',$request->password)
                            ->first();
        if($admin){

            $request->session()->put('admin',$admin->name);
            return view('pages.admin.adminDashboard')->with('admin', $admin);
        }
        return back();
    }

    public Function adminDashboard(){
        return view('pages.admin.adminDashboard');
    }
    public Function customerAdd(){

        return view('pages.admin.customerAdd');
    }

    public Function customerAddSubmitted(Request $request){
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
        return redirect()->route('customerList');
    }
    public Function customerList(){
        $customers = customer::all();
        return view('pages.admin.customerList')->with('customers', $customers);
    }
    public Function customerEdit(){
        return view('pages.admin.adminDashboard');
    }
    public Function customerDelete(){
        return view('pages.admin.adminDashboard');
    }
    public Function createAdmin(){
        
        return view('pages.admin.createAdmin');
    }
    public Function createAdminSubmitted(Request $request){
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
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phoneno = $request->phone;
        $admin->password = $request->password;
        $admin->save();
        return redirect()->route('adminList');
    }

    public Function adminLogout(){
        session()->forget('admin');
        return redirect()->route('adminLogin');
    }

    public Function adminList(){
        $admins = admin::all();
        return view('pages.admin.adminList')->with('admins', $admins);;
    }

    
}
