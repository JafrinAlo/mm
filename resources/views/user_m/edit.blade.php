@extends('layouts.app')
@section('content')
    <h1>Edit your meal request</h1>
    <div class="jumbotron">
        
            <div class='form-group'>
                {!! Form::open(['action'=>['App\Http\Controllers\UserFoodRequestsController@update',$breakfasts_req->id],'method'=>'POST']) !!}
                {{Form::label('date','Which date you want to order breakfast: ')}}
                {{Form::date('date',$breakfasts_req->order_date,['placeholder'=>"yyyy-mm-dd",'min'=>date('Y-m-d', strtotime('+1 days')),'id'=>'date'])}}
                <br>
                {{Form::label('day','Day: ')}}
                {{Form::text('day',$breakfasts_req->day,['id'=>'day'])}}

                {{-- <br>
                {{Form::label('date','Which date you want to order lunch: ')}}
                {{Form::date('date',$lunches_req->order_date,['placeholder'=>"yyyy-mm-dd",'min'=>date('Y-m-d', strtotime('+1 days')),'id'=>'date'])}}
                <br>
                {{Form::label('day','Day: ')}}
                {{Form::text('day',$lunches_req->day,['id'=>'day'])}} --}}
                    <br>
                    {{Form::hidden('_method','PUT')}}
                {{Form::submit('Update Date',['class'=>'btn btn-success'])}}
                    <br>
               
<br>
    </div>
    {!! Form::close() !!}
    {!!Form::open(['action'=>['App\Http\Controllers\UserFoodRequestsController@destroy',$breakfasts_req->id],'method'=>'POST','class'=>'pull-right'])!!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}

    <script>
        document.getElementById("date").addEventListener("change", myFunction);
    function myFunction(){
        const weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
        let date=document.getElementById("date").value;

        const d = new Date(date);
        let day = weekday[d.getDay()];

        var var_day=document.getElementById("day");
        var_day.value=day;
        }
    </script>
@endsection
