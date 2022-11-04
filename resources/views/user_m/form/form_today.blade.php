{!! Form::open(['action'=>'App\Http\Controllers\FoodRequestsController@store','method'=>'POST']) !!}
    
    <div class='form-group'>
        {{-- special request --}}
        @if(count($specials)>0)
        {{Form::label('item','Special meal avaiable for today: ')}}
            @foreach($specials as $special)
                {{Form::checkbox('s_item', $special->id)}}
                {{Form::label('s_item',$special->item)}}
                <br>
            @endforeach
            {{Form::label('no_of_meal', 'Number of special meals: ')}}{{--no_of_meal is name, Number of item is text --}}
            {{Form::number('no_of_meal', '')}}
            <br>
            {{Form::submit('Request Special Meal',['class'=>'btn btn-success'])}}
            <br>
            @else
            <p>Sorry!! No special meal avaiable today.</p><br>
        @endif

        {{-- optional --}}
        @if(count($optionals)>0)
        {{Form::label('item','Add ons: ')}}
        <br>
            @foreach($optionals as $optional)
                {{Form::checkbox('o_item', $optional->id)}}
                {{Form::label('item',$optional->item)}}
                <br>
            @endforeach
            @else
            <p>Sorry!! no data available in optional.</p>
        @endif
        <br>
        {{Form::submit('Request Optional items',['class'=>'btn btn-success'])}}
    </div>
{!! Form::close() !!}


  <script> 
    function show_form_today() {
        //document.getElementById("form_today");
        var x = document.getElementById('form_today');
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    </script>