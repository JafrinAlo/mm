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

        $breakfasts_query =DB::table('food__req__breakfasts')
            ->rightjoin('breakfasts', 'food__req__breakfasts.day', '=', 'breakfasts.day')
            ->select('breakfasts.*','food__req__breakfasts.*')
            ->where('food__req__breakfasts.staffID','=',$staffID)
            ->where('food__req__breakfasts.status','=','1');

        $breakfasts_total=$breakfasts_query->sum('price');

        $lunches_query =DB::table('food__req__lunches')
            ->rightjoin('lunches', 'food__req__lunches.day', '=', 'lunches.day')
            ->select('lunches.*','food__req__lunches.*')
            ->where('food__req__lunches.staffID','=',$staffID)
            ->where('food__req__lunches.status','=','1');
        $lunches_total=$lunches_query->sum('price');
        
        $specials=$specials_query->get();
        $optionals=$optionals_query->get();
        $breakfasts=$breakfasts_query->get();
        $lunches=$lunches_query->get();

        
        $total=$specials_total+$optionals_total+$breakfasts_total+$lunches_total;
            return view('user_m.index')->with(compact('total','specials','optionals','breakfasts','lunches'
        ,'specials_total','optionals_total','breakfasts_total','lunches_total'));
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
