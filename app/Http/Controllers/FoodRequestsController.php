<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Special;
use App\Models\Optional;
use App\Models\Food_Req_Breakfast;
use App\Models\Food_Req_Lunch;
use App\Models\Food_Req_Optional;
use App\Models\Food_Req_Special;
use App\Models\User;
//use App\Models\Breakfast;
//use App\Models\Lunch;


class FoodRequestsController extends Controller
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
    public function index()
    {
        //
        $specials= Special::whereDate('date',date('Y-m-d'))->get();//here date returns current date
        $optionals=Optional::all();

        //$breakfasts=Breakfast::all();
        //$lunches=Lunch::all();
        //return view('user_m.menu.index')->with('specials',$specials)->with('optionals',$optionals);
        return view('user_m.food_request')->with(compact('specials', 'optionals'));
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
    //create request
    $session_id=Auth::id();
    $staffID=User::where('id', $session_id)->select('staffid')->pluck('staffid')->first();

    $breakfasts_req=new Food_Req_Breakfast();
    $lunches_req=new Food_Req_Lunch();
    $optionals_req=new Food_Req_Optional();
    $specials_req=new Food_Req_Special();

if ($request->input('s_item')!="") {
    $specials_req->staffid=$staffID;
    $specials_req->special_id=$request->input('s_item');
    $specials_req->no_of_meal=$request->input('no_of_meal');
    $specials_req->save();
    return redirect('/food_request')->with('success', 'Special item request for TODAY under processing');
}
    if ($request->input('o_item')!="") {
        $optionals_req->staffid=$staffID;
        $optionals_req->option_id=$request->input('o_item');
        $optionals_req->save();
        return redirect('/food_request')->with('success', 'Optional item orders for TODAY under processing');
    }

    


    if ($request->input('o_item')!="") {
            $optionals_req->staffid=$staffID;
            $optionals_req->option_id=$request->input('o_item');
            $optionals_req->save();
        
        
        return redirect('/food_request')->with('success','Food Request for TODAY under processing');
        }
    
    //form store for later
    if($request->input('meal_type')=="breakfast")
    {
        $this->validate($request,[
            'date'=>'required',
            'day'=>'required',
            'meal_type'=>'required'
        ]);
        $breakfasts_req->staffid=$staffID;
        $breakfasts_req->day=$request->input('day');
        $breakfasts_req->order_date=$request->input('date');
        $breakfasts_req->save();
        return redirect('/food_request')->with('success','Request for BREAKFAST under process');
    }

    if($request->input('meal_type')=="lunch"  )
    {
        $this->validate($request,[
            'date'=>'required',
            'day'=>'required',
            'meal_type'=>'required'
        ]);
        $lunches_req->staffid=$staffID;
        $lunches_req->day=$request->input('day');
        $lunches_req->order_date=$request->input('date');
        $lunches_req->save();
        return redirect('/food_request')->with('success','Request for LUNCH under process');
    }

    else
        return redirect('/food_request')->with('error','Fill the form properly');

        
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
        //
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
    }
}
