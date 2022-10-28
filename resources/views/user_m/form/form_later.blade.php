{!! Form::open(['action'=>'App\Http\Controllers\FoodRequestsController@store','method'=>'POST']) !!}
    
    <div class='form-group'>

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