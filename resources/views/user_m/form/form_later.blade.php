{!! Form::open(['action'=>'App\Http\Controllers\FoodRequestsController@store','method'=>'POST']) !!}
    
    <div class='form-group'>
        {{Form::label('date','Which date you want to order: ')}}
        {{Form::date('date',date('Y-m-d', strtotime('+2 days')),['min'=>date('Y-m-d', strtotime('+2 days'))])}}
        <br>
        {{Form::checkbox('meal_type','breakfast')}}
        {{Form::label('meal_type','Breakfast')}}
        {{Form::checkbox('meal_type','lunch')}}
        {{Form::label('meal_type','Lunch')}}
        <br>
        {{-- optional --}}
        @if(count($optionals)>0)
        {{Form::label('item','Add ons: ')}}
        <br>
            @foreach($optionals as $optional)
                {{Form::checkbox('item', $optional->id)}}
                {{Form::label('item',$optional->item)}}
                <br>
            @endforeach
            @else
            <p>Sorry!! no data available in optional.</p>
        @endif
        <br>
        {{Form::submit('Request',['class'=>'btn btn-success'])}}
    </div>
{!! Form::close() !!}

  <script> 
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