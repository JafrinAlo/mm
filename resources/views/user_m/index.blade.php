@extends('layouts.app')
@section('content')
{{-- <h1>Welcome</h1> --}}

  <h2>Your total bill is: {{$total}}</h2>

  
  <div class="table shadow p-3 mb-5 bg-white rounded" style="width: 50%">
    <h3>Breakfasts Bill: {{$breakfasts_total}}</h3>
        @if(count($breakfasts)>0)
        
                       
          <table class="table table-striped table-sm table-hover">
            <thead>
              <tr>
                <th>Date</th>
                <th>Item</th>
                <th>Price</th>
              </tr>
            
            </thead>
            <tbody class="table-hover">
              @foreach($breakfasts as $breakfast)
                <tr>
                  <td>{{$breakfast->order_date}}</td>
                  <td>{{$breakfast->item}}</td>
                  <td>{{$breakfast->price}}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
          @else
          <p>Looks like you didnt order anything for breakfast</p>
      @endif
        </div>
             
  
  
  
    
  
  
  
  <div class="table shadow p-3 mb-5 bg-white rounded" style="width: 50%">
  <h3>Lunches Bill: {{$lunches_total}}</h3>
      @if(count($lunches)>0)
      
                     
        <table class="table table-striped table-sm table-hover">
          <thead>
            <tr>
              <th>Date</th>
              <th>Item</th>
              <th>Price</th>
            </tr>
          
          </thead>
          <tbody class="table-hover">
            @foreach($lunches as $lunch)
              <tr>
                <td>{{$lunch->order_date}}</td>
                <td>{{$lunch->item}}</td>
                  <td>{{$lunch->price}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
        @else
        <p>Sorry!! data not loaded</p>
    @endif
      </div>
           
 
      <div class="table shadow p-3 mb-5 bg-white rounded" style="width: 50%">
          <h3>Specials Bill {{$specials_total}}</h3>
              @if(count($specials)>0)
      
                <table class="table table-striped table-sm table-hover">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Item</th>
                      <th>Price</th>
                    </tr>
                  
                  </thead>
                  <tbody class="table-hover">
                    @foreach($specials as $special)
                      <tr>
                        <td>{{$special->created_at}}</td>
                        <td>{{$special->item}}</td>
                        <td style="text-align:center" >{{$special->price}}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
                @else
                <p>Sorry!! data not loaded</p>
            @endif
              </div>
                   
         
          <div class="table shadow p-3 mb-5 bg-white rounded" style="width: 50%">
            <h3>Optionals Bill: {{$optionals_total}}</h3>
                @if(count($specials)>0)
                
                               
                  <table class="table table-striped table-sm table-hover">
                    <thead>
                      <tr>
                        <th>Date</th>
                        <th>Item</th>
                        <th>Price</th>
                      </tr>
                    
                    </thead>
                    <tbody class="table-hover">
                      @foreach($optionals as $optional)
                        <tr>
                          <td>{{$optional->created_at}}</td>
                          <td>{{$optional->item}}</td>
                          <td>{{$optional->price}}</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                  @else
                <p>Sorry!! data not loaded</p>
            @endif
                </div>
                     
            

@endsection