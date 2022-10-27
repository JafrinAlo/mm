@extends('layouts.app')
@section('content')
<h1>Menu</h1> 
    {{-- special --}}
    @if(count($specials)>0)
        @foreach($specials as $special)
            <div class="alert alert-success" role="alert">
                Special avaiable on {{$special->date}}
                Meal: <b>{{$special->item}} </b>, price:  {{$special->price}}
             </div>
             @endforeach
    @else
        <p>Sorry!! No special today!</p>
    @endif

    @if(count($optionals)>0)
    <div class="table">
                   
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ADD ONS</th>
            <th>PRICE</th>
          </tr>
        </thead>
        <tbody>
          @foreach($optionals as $optional)
            <tr>
              <td>{{$optional->item}}</td>
              <td>{{$optional->price}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
        {{-- <div class="alert alert-success" role="alert">
            
            Meal: <b>{{$optional->item}} </b>, price:  {{$optional->price}}
         </div> --}}
         
@else
    <p>Sorry!! data not loaded</p>
@endif
<br>
<br>
<h3>Regular meal</h3>
    <div class="table">
                   
        <table class="table table-striped">
          <thead>
            <tr>
              <th>DAY</th>
              <th>BREAKFAST</th>
              <th>LUNCH</th>
              <th>PRICE</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Sunday</td>
              <td>Breakfast</td>
              <td>230</td>
            </tr>
            <tr>
              <td>Monday</td>
              <td>Lunch</td>
              <td>200</td>
            </tr>
            <tr>
              <td>Tuesday</td>
              <td>Halim</td>
              <td>300</td>
            </tr>
            <tr>
                <td>Wednesday</td>
            </tr>
            <tr>
                <td>Thursday</td>
            </tr>
          </tbody>
        </table>
      </div>    
@endsection