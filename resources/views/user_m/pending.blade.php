@extends('layouts.app')
@section('content')
<h1>Your pending requests: </h1>

<div class="table shadow p-3 mb-5 bg-white rounded" style="width: 50%">
  <h3>Breakfasts ordered</h3>
      @if(count($breakfasts_req)>0)
      
                     
        <table class="table table-striped table-sm table-hover">
          <thead>
            <tr>
              <th>Date</th>
              <th>Actions</th>
            </tr>
          
          </thead>
          <tbody class="table-hover">
            @foreach($breakfasts_req as $breakfast_req)
              <tr>
                <td>{{$breakfast_req->order_date}}</td>
                <td><a href="/pending/{{$breakfast_req->id}}/edit">Edit/Delete</a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
           
  @else
      <p>Sorry!! data not loaded</p>
  @endif


  



<div class="table shadow p-3 mb-5 bg-white rounded" style="width: 50%">
<h3>Lunches ordered</h3>
    @if(count($lunches_req)>0)
    
                   
      <table class="table table-striped table-sm table-hover">
        <thead>
          <tr>
            <th>Date</th>
            <th>Actions</th>
          </tr>
        
        </thead>
        <tbody class="table-hover">
          @foreach($lunches_req as $lunch_req)
            <tr>
              <td>{{$lunch_req->order_date}}</td>
              <td><a href="/pending/{{$lunch_req->id}}/edit_lunch">Edit / Delete</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
         
@else
    <p>Sorry!! data not loaded</p>
@endif
    <div class="table shadow p-3 mb-5 bg-white rounded" style="width: 50%">
        <h3>Specials ordered</h3>
            @if(count($specials_req)>0)
            
                           
              <table class="table table-striped table-sm table-hover">
                <thead>
                  <tr>
                    <th>Date</th>
                    <th>Item</th>
                    <th>Number ordered</th>
                  </tr>
                
                </thead>
                <tbody class="table-hover">
                  @foreach($specials_req as $special_req)
                    <tr>
                      <td>{{$special_req->created_at}}</td>
                      <td>{{$special_req->item}}</td>
                      <td style="text-align:center" >{{$special_req->no_of_meal}}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
                 
        @else
            <p>Sorry!! data not loaded</p>
        @endif
        <div class="table shadow p-3 mb-5 bg-white rounded" style="width: 50%">
          <h3>Optionals ordered</h3>
              @if(count($specials_req)>0)
              
                             
                <table class="table table-striped table-sm table-hover">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Item</th>
                    </tr>
                  
                  </thead>
                  <tbody class="table-hover">
                    @foreach($optionals_req as $optional_req)
                      <tr>
                        <td>{{$optional_req->created_at}}</td>
                        <td>{{$optional_req->item}}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
                   
          @else
              <p>Sorry!! data not loaded</p>
          @endif
        
@endsection