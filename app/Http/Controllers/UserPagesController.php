<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Food_Req_Breakfast;
use App\Models\Food_Req_Lunch;
use App\Models\Food_Req_Optional;
use App\Models\Food_Req_Special;

use App\Models\Special;
use App\Models\Optional;

use App\Models\User;

use App\Models\Breakfast;
use App\Models\Lunch;

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

        $session_id=Auth::id();
        $staffID=User::where('id', $session_id)->select('staffid')->pluck('staffid')->first();

        $specials_query =DB::table('food__req__specials')
            ->rightjoin('specials', 'food__req__specials.special_id', '=', 'specials.id')
            ->select('specials.*','food__req__specials.*')
            ->where('food__req__specials.staffID','=',$staffID)
            ->where('food__req__specials.status','=','1');

        $specials_total=$specials_query->sum('price');

        $optionals_query =DB::table('food__req__optionals')
            ->rightjoin('optionals', 'food__req__optionals.option_id', '=', 'optionals.id')
            ->select('optionals.*','food__req__optionals.*')
            ->where('food__req__optionals.staffID','=',$staffID)
            ->where('food__req__optionals.status','=','1');

        $optionals_total=$optionals_query->sum('price');



            
        
        $total=$specials_total+$optionals_total;
            return view('user_m.index')->with(compact('total'));
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
