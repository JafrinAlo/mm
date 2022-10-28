{!! Form::open(['action'=>'App\Http\Controllers\FoodRequestsController@store','method'=>'POST']) !!}
    
    <div class='form-group'>

    </div>
{!! Form::close() !!}


  <script> 
    function show_form_tomorrow() {
        //document.getElementById("form_tomorrow");
        var x = document.getElementById('form_tomorrow');
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    </script>