@extends('relog.app')

@section('content')
<h1>Register</h1>
<div class="main-agileinfo">
    <div class="agileits-top">
        <form action="{{url('/postRegister')}}" method="post">
            {{csrf_field()}}
            <input class="text" type="text" name="name" placeholder="Full Name" required="">
            <input class="text" type="text" name="username" placeholder="Username" required="">
            <input class="text email" type="email" name="email" placeholder="Email" required="">
            <input class="text" type="password" name="password" placeholder="Password" required="">
            <div class="wthree-text">
                <label class="anim">
                    <input type="checkbox" class="checkbox" required="">
                    <span>I Agree To The Terms & Conditions</span>
                </label>
                <div class="clear"> </div>
            </div>
            <input type="submit" value="SIGNUP">
        </form>
        <p>Have an Account? <a href="{{url('login')}}"> Login Now!</a></p>
    </div>
</div>
@endsection
