@extends('layouts.app')
@section('content')
{{-- <h1>Welcome</h1> --}}
<div class="table">
  <h2>Your total bill is: {{$total}}</h2>
    <h2>History </h2>
               
    <table class="table table-condensed">
      <thead>
        <tr>
          <th>Date</th>
          <th>Item</th>
          <th>Due</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>20-10-22</td>
          <td>Breakfast</td>
          <td>230</td>
        </tr>
        <tr>
          <td>15-10-22</td>
          <td>Lunch</td>
          <td>200</td>
        </tr>
        <tr>
          <td>10-10-22</td>
          <td>Halim</td>
          <td>300</td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection