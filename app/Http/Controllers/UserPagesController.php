<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        return view('user_m.index');
    }

    public function food_request(){
        return view('user_m.food_request');
    }

    public function menu(){
        return view('user_m.menu.index');
    }
    public function pay_bill(){
        return view('user_m.pay_bill');
    }
}
