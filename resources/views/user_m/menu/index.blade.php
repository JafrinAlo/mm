@extends('layouts.app')
@section('content')
<h1>Menu</h1> 
    @if(count($specials)>0)
        @foreach($specials as $special)
            <div class="alert alert-success" role="alert">
                Special avaiable on {{$special->date}}
                Meal: {{$special->item}} , price:  {{$special->price}}
             </div>
             @endforeach
    @else
        <p>Sorry!! No special today!</p>
    @endif
@endsection