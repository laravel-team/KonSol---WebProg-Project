@extends('layout')

@section('login', 'Login')

@section('content')
<link rel="stylesheet" type="text/css" href="css/page2.css">
    <section once="" class="cid-ra90iOq3RC" id="footer7-1d">
    <form id="form-regis" class="mbr-form" action="{{ url('login') }}" method="post" data-form-title="Mobirise Form">
    @csrf
        <div class="wrapper">
            <div class="container-box">
              <label>Email</label>
              <input type="text" name="email" >
              <label>Password</label>
              <input type="Password" name="password" >
              <button id="button-login" type="submit">Login</button>
              <p style="padding-left: 17%;padding-top: 5%">
                <a href="{{ url('register')}}" style="color: black;"><u>
                  don't have account?</a>
                </u>
              </p>
            </div>
           
        </div>

   </form>
   </section>
@endsection
