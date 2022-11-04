{!! Form::open(['action'=>'App\Http\Controllers\FoodRequestsController@store','method'=>'POST']) !!}
    
    <div class='form-group'>
        <br>
        {{Form::label('date','Which date you want to order: ')}}
        {{-- {{Form::date('date',date('Y-m-d', strtotime('+2 days')),['placeholder'=>"yyyy-mm-dd",'min'=>date('Y-m-d', strtotime('+2 days')),'id'=>'date'])}} --}}
        {{Form::date('date','',['placeholder'=>"yyyy-mm-dd",'min'=>date('Y-m-d', strtotime('+1 days')),'id'=>'date'])}}
        
        <br>
        {{Form::label('day','Day: ')}}
        {{Form::text('day','',['id'=>'day'])}}
        <br>
        {{Form::checkbox('meal_type','breakfast')}}
        {{Form::label('meal_type','Breakfast')}}
        {{Form::checkbox('meal_type','lunch')}}
        {{Form::label('meal_type','Lunch')}}
        <br>
        {{-- optional --}}
        {{-- @if(count($optionals)>0)
        {{Form::label('item','Add ons: ')}}
        <br>
            @foreach($optionals as $optional)
                {{Form::checkbox('o_item', $optional->id)}}
                {{Form::label('item',$optional->item)}}
                <br>
            @endforeach
            @else
            <p>Sorry!! no data available in optional.</p>
        @endif --}}
        <br>
        {{Form::submit('Request',['class'=>'btn btn-success'])}}
    </div>
{!! Form::close() !!}

  <script> 
    // for date to day
    document.getElementById("date").addEventListener("change", myFunction);
function myFunction(){
const weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
let date=document.getElementById("date").value;

const d = new Date(date);
let day = weekday[d.getDay()];

var var_day=document.getElementById("day");
var_day.value=day;
}


    //form

    function show_form_later() {
        //document.getElementById("form_today");
        var x = document.getElementById('form_later');
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    </script>