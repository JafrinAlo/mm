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

class UserFoodRequestsController extends Controller
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //made a hugeeee mistake double underscore in food req specials/optionals/bfast/lunch
    public function index()
    {
        //
        $session_id=Auth::id();
        $staffID=User::where('id', $session_id)->select('staffid')->pluck('staffid')->first();

        $specials_req =DB::table('food__req__specials')
        
            ->leftjoin('specials', 'food__req__specials.special_id', '=', 'specials.id')
            ->where('food__req__specials.staffID','=',$staffID)
            ->where('food__req__specials.status','=','0')
            ->orderBy('created_at','asc')
            ->get();
        
        //return $specials_req;

        $optionals_req =DB::table('food__req__optionals')
        
            ->leftjoin('optionals', 'food__req__optionals.option_id', '=', 'optionals.id')
            ->where('food__req__optionals.staffID','=',$staffID)
            ->where('food__req__optionals.status','=','0')
            ->orderBy('created_at','asc')
            ->get();



        $breakfasts_req=DB::table('food__req__breakfasts')
        ->where('food__req__breakfasts.staffID','=',$staffID)
        ->where('food__req__breakfasts.status','=','0')
        ->where('order_date','>',DB::raw('CURDATE()'))
        ->orderBy('order_date','asc')
        ->get();
        //return $breakfasts_req;
        $lunches_req=DB::table('food__req__lunches')
        ->where('food__req__lunches.staffID','=',$staffID)
        ->where('food__req__lunches.status','=','0')
        ->whereDate('order_date','>', DB::raw('CURDATE()'))
        ->orderBy('order_date','asc')
        ->get();
        return view('user_m.pending')->with(compact('specials_req','optionals_req','breakfasts_req','lunches_req'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $breakfasts_req=Food_Req_Breakfast::find($id);
        $lunches_req=Food_Req_Lunch::find($id);
        return view('user_m.edit')->with(compact('breakfasts_req','lunches_req'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $session_id=Auth::id();
        $staffID=User::where('id', $session_id)->select('staffid')->pluck('staffid')->first();
        $this->validate($request,[
            'day'=>'required'
        ]);
        $breakfasts_req=Food_Req_Breakfast::find($id);
        $breakfasts_req->staffid=$staffID;
        $breakfasts_req->day=$request->input('day');
        $breakfasts_req->order_date=$request->input('date');
        $breakfasts_req->save();
        return redirect('/pending')->with('success','Update for BREAKFAST done');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $breakfasts_req=Food_Req_Breakfast::find($id);
        $breakfasts_req->delete();
        return redirect('/pending')->with('success','Request Deleted');
    }
}
