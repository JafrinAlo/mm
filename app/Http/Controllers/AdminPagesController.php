<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\Food_Req_Breakfast;
use App\Models\Food_Req_Lunch;
use App\Models\Food_Req_Optional;
use App\Models\Food_Req_Special;

use App\Models\Special;
use App\Models\Optional;

use App\Models\User;

use App\Models\Breakfast;
use App\Models\Lunch;


class AdminPagesController extends Controller
{
    //
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
            ->where('food__req__specials.status','=','0')
            ->where('created_at','=',DB::raw('CURDATE()'));

        $specials_total=$specials_query->count('status');

        $optionals_query =DB::table('food__req__optionals')
            ->rightjoin('optionals', 'food__req__optionals.option_id', '=', 'optionals.id')
            ->select('optionals.*','food__req__optionals.*')
            ->where('food__req__optionals.status','=','0')
            ->where('created_at','=',DB::raw('CURDATE()'));

        $optionals_total=$optionals_query->count('status');

        $breakfasts_query =DB::table('food__req__breakfasts')
            ->rightjoin('breakfasts', 'food__req__breakfasts.day', '=', 'breakfasts.day')
            ->select('breakfasts.*','food__req__breakfasts.*')
            ->where('food__req__breakfasts.status','=','0')
            ->where('order_date','=',DB::raw('CURDATE()'));

        $breakfasts_total=$breakfasts_query->count('status');

        $lunches_query =DB::table('food__req__lunches')
            ->rightjoin('lunches', 'food__req__lunches.day', '=', 'lunches.day')
            ->select('lunches.*','food__req__lunches.*')
            ->where('food__req__lunches.status','=','1')
            ->where('order_date','=',DB::raw('CURDATE()'));

        $lunches_total=$lunches_query->count('status');
        
        $specials=$specials_query->get();
        $optionals=$optionals_query->get();
        $breakfasts=$breakfasts_query->get();
        $lunches=$lunches_query->get();

        
        $total=$specials_total+$optionals_total+$breakfasts_total+$lunches_total;

        return view('admin_m.index')->with(compact('total','specials','optionals','breakfasts','lunches'
        ,'specials_total','optionals_total','breakfasts_total','lunches_total'));
    }

    public function confirm_bill(){
        return view('admin_m.confirm_bill');
    }

    
}
