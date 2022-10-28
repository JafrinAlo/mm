@extends('layouts.app')
@section('content')
    <h1>Order your meal</h1>
    <div class="jumbotron">
        <p>When you want to order?</p>
        
        <button type="button" onclick="show_form_today()" class="btn btn-primary btn-lg custom" id="btn_today">Today</button>
        <div id="form_today" style="display:none;">{{-- div style none hides div until click --}}
            @include('user_m.form.form_today')
        </div>
        <br><br>
        <button type="button" onclick="show_form_tomorrow()" class="btn btn-primary btn-lg custom" id="btn-tomorrow">Tomorrow</button>
        <div id="form_tomorrow" style="display:none;">
            @include('user_m.form.form_tomorrow')
        </div>
        <br><br>
        <button type="button" onclick="show_form_later()" class="btn btn-primary btn-lg custom" id="btn-later">Later</button>
        <div id="form_later" style="display:none;">
            @include('user_m.form.form_later')
        </div>
<br>
    </div>
@endsection