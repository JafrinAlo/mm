@extends('admin_m.layouts.app')
@section('content')
{{-- <h1>Welcome</h1> --}}

  <h2>To be served: {{$total}}</h2>


  <div class="table shadow p-3 mb-5 bg-white rounded" style="width: 50%">
    <h3>Specials Order {{$specials_total}}</h3>
        @if(count($specials)>0)

          <table class="table table-striped table-sm table-hover">
            <thead>
              <tr>
                <th>Date</th>
                <th>Item</th>
              </tr>
            
            </thead>
            <tbody class="table-hover">
              @foreach($specials as $special)
                <tr>
                  <td>{{$special->created_at}}</td>
                  <td>{{$special->item}}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
          @else
          <p>Sorry!! No requests</p>
      @endif
        </div>

  
  <div class="table shadow p-3 mb-5 bg-white rounded" style="width: 50%">
    <h3>Breakfasts Orders: {{$breakfasts_total}}</h3>
        @if(count($breakfasts)>0)
        
          <table class="table table-striped table-sm table-hover">
            <thead>
              <tr>
                <th>Date</th>
                <th>Item</th>
              </tr>
            
            </thead>
            <tbody class="table-hover">
              @foreach($breakfasts as $breakfast)
                <tr>
                  <td>{{$breakfast->order_date}}</td>
                  <td>{{$breakfast->item}}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
          @else
          <p>No orders!! </p>
      @endif
        </div>
             
  
  
  
    
  
  
  
  <div class="table shadow p-3 mb-5 bg-white rounded" style="width: 50%">
  <h3>Lunch Orders: {{$lunches_total}}</h3>
      @if(count($lunches)>0)
      
                     
        <table class="table table-striped table-sm table-hover">
          <thead>
            <tr>
              <th>Date</th>
              <th>Item</th>
            </tr>
          
          </thead>
          <tbody class="table-hover">
            @foreach($lunches as $lunch)
              <tr>
                <td>{{$lunch->order_date}}</td>
                <td>{{$lunch->item}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
        @else
        <p>No Lunch orders </p>
    @endif
      </div>
                   
         
          <div class="table shadow p-3 mb-5 bg-white rounded" style="width: 50%">
            <h3>Optional orders: {{$optionals_total}}</h3>
                @if(count($specials)>0)
                
                               
                  <table class="table table-striped table-sm table-hover">
                    <thead>
                      <tr>
                        <th>Date</th>
                        <th>Item</th>
                      </tr>
                    
                    </thead>
                    <tbody class="table-hover">
                      @foreach($optionals as $optional)
                        <tr>
                          <td>{{$optional->created_at}}</td>
                          <td>{{$optional->item}}</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                  @else
                <p>Sorry!! No orders</p>
            @endif
                </div>
                     
            

@endsection