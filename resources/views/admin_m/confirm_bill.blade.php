@extends('admin_m.layouts.app')
@section('content')
<h1>Menu</h1> 
    {{-- special --}}
    <div class="jumbotron">
      <button class="btn btn-primary btn-lg">Confirm Today's Bill</button>
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
    <div class="table shadow p-3 mb-5 bg-white rounded" style="width: 40%">
<h3>Additionals</h3>
    @if(count($optionals)>0)
    
                   
      <table class="table table-striped table-sm table-hover">
        <thead>
          <tr>
            <th>ADD ONS</th>
            <th>PRICE</th>
          </tr>
        
        </thead>
        <tbody class="table-hover">
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
<div class="row">
<div class="column" style="float: left; width: 50%;">

    <div class="table shadow p-3 mb-5 bg-white rounded" style="width: 90%">
      <h3>Breakfast</h3>         
        <table class="table table-hovertable-sm table-hover">
          <thead>
            <tr>
              <th>DAY</th>
              <th>BREAKFAST</th>
              <th>PRICE</th>
            </tr>
          </thead>
          <tbody>
            @if(count($breakfasts)>0)
              <tr>
                <th>Sunday</th>
                  @foreach($breakfasts as $breakfast)
                    @if($breakfast->day=='sunday')
                    <tr>
                      <td></td>
                      <td>{{$breakfast->item}}</td>
                      <td>{{$breakfast->price}}</td>
                    </tr>
                    @endif
                  @endforeach
              </tr>

              <tr>
              <th>Monday</th>
                @foreach($breakfasts as $breakfast)
                  @if($breakfast->day=='monday')
                  <tr>
                    <td></td>
                    <td>{{$breakfast->item}}</td>
                    <td>{{$breakfast->price}}</td>
                  </tr>
                  @endif
                @endforeach
              </tr>
              <tr>
                <th>Tuesday</th>
                  @foreach($breakfasts as $breakfast)
                    @if($breakfast->day=='tuesday')
                    <tr>
                      <td></td>
                      <td>{{$breakfast->item}}</td>
                      <td>{{$breakfast->price}}</td>
                    </tr>
                    @else
                    <td></td>
                    @endif
                  @endforeach
                </tr>
                <tr>
                  <th>Wednesday</th>
                    @foreach($breakfasts as $breakfast)
                      @if($breakfast->day=='wednesday')
                      <tr>
                        <td></td>
                        <td>{{$breakfast->item}}</td>
                        <td>{{$breakfast->price}}</td>
                      </tr>
                      @else
                        <td></td>
                      @endif
                    @endforeach
                  </tr>
                  <tr>
                    <th>Thursday</th>
                      @foreach($breakfasts as $breakfast)
                        @if($breakfast->day=='thursday')
                        <tr>
                          <td></td>
                          <td>{{$breakfast->item}}</td>
                          <td>{{$breakfast->price}}</td>
                        </tr>
                        @else
                        <td></td>
                        @endif
                      @endforeach
                    </tr>
           @else
          <p>No data avaiable</p>
          @endif
          </tbody>
        </table>
      </div>
</div>

  <div class="table shadow p-3 mb-5 bg-white rounded" style="float:left; width:50% ">
  <h3>Lunch</h3>
      <div class="table" style="width: 90%">
                     
          <table class="table table-hover table-sm ">
            <thead>
              <tr>
                <th>DAY</th>
                <th>LUNCH</th>
                <th>PRICE</th>
              </tr>
            </thead>
            <tbody>
              @if(count($lunches)>0)
                <tr>
                  <th>Sunday</th>
                    @foreach($lunches as $lunch)
                      @if($lunch->day=='sunday')
                      <tr>
                        <td></td>
                        <td>{{$lunch->item}}</td>
                        <td>{{$lunch->price}}</td>
                      </tr>
                      @endif
                    @endforeach
                </tr>
  
                <tr>
                <th>Monday</th>
                  @foreach($lunches as $lunch)
                    @if($lunch->day=='monday')
                    <tr>
                      <td></td>
                      <td>{{$lunch->item}}</td>
                      <td>{{$lunch->price}}</td>
                    </tr>
                    @endif
                  @endforeach
                </tr>
                <tr>
                  <th>Tuesday</th>
                    @foreach($lunches as $lunch)
                      @if($lunch->day=='tuesday')
                      <tr>
                        <td></td>
                        <td>{{$lunch->item}}</td>
                        <td>{{$lunch->price}}</td>
                      </tr>
                      @else
                      <td></td>
                      @endif
                    @endforeach
                  </tr>
                  <tr>
                    <th>Wednesday</th>
                      @foreach($lunches as $lunch)
                        @if($lunch->day=='wednesday')
                        <tr>
                          <td></td>
                          <td>{{$lunch->item}}</td>
                        <td>{{$lunch->price}}</td>
                        </tr>
                        @else
                          <td></td>
                        @endif
                      @endforeach
                    </tr>
                    <tr>
                      <th>Thursday</th>
                        @foreach($lunches as $lunch)
                          @if($lunch->day=='thursday')
                          <tr>
                            <td></td>
                            <td>{{$lunch->item}}</td>
                            <td>{{$lunch->price}}</td>
                          </tr>
                          @else
                          <td></td>
                          @endif
                        @endforeach
                      </tr>
             @else
            <p>No data avaiable</p>
            @endif
            </tbody>
          </table>
        </div>
      </div>
      </div>
    </div>

@endsection