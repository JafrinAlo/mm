<?php
namespace App;
use Illuminate\Support\Facades\DB;

use App\Models\Special;
use App\Models\Breakfast;
use App\Models\Lunch;
use App\Models\Optional;

class Menu{
    public function specials()
    {
    //     $query= Special::whereDate('date',date('Y-m-d'))->get();//here date returns current date
    //     //$user=DB::table('specials')->where('date',date('Y-m-d'))->get();
    //     $specials=[];
    //     foreach($query as $row){
    //         $specials['date'][]=$row->date;
    //         $specials['item'][]=$row->item;
    //         $specials['price'][]=$row->price;
    //     }
    //    // $data['chart_data'] = json_encode($specials);
    //     return $specials;

    }
    public function breakfasts()
    {

    }
}
?>