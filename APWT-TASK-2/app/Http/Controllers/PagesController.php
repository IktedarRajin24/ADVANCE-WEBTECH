<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }

    public function products(){
        $products = array("Mobile", "Laptop", "Computer");
        return view('products')-> with('products', $products);
    }

    public function ourTeam(){
        $memberA = "Member A";
        $memberB = "Member B";
        $memberC = "Member C";
        return view('ourTeam')
        ->with('memberA', $memberA)
        ->with('memberB', $memberB)
        ->with('memberC', $memberC);
    }

    public function aboutUs(){
        return view('aboutUs');
    }

    public function contactUs(){
        return view('contactUs');
    }
}
