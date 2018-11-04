@extends('relog.app')

@section('content')
<h1>Login</h1>
<div class="main-agileinfo">
    <div class="agileits-top">
        <form action="{{url('/postLogin')}}" method="post">
            {{csrf_field()}}
            <input class="text email" type="text" name="emailUsername" placeholder="Email or Username" required="">
            <input class="text" type="password" name="password" placeholder="Password" required="">
            <div class="wthree-text">
                <label class="anim">
                    <input type="checkbox" class="checkbox" required="">
                    <span>I Agree To The Terms & Conditions</span>
                </label>
                <div class="clear"> </div>
            </div>
            <input type="submit" value="LOGIN">
        </form>
        <p>Don't Have an Account? <a href="{{url('register')}}"> Register Now!</a></p>
    </div>
</div>
@endsection
