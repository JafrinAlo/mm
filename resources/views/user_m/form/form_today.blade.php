{!! Form::open(['action'=>'App\Http\Controllers\FoodRequestsController@store','method'=>'POST']) !!}
    
    <div class='form-group'>
        {{Form::label('no_of_meal', 'Number of item: ')}}
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