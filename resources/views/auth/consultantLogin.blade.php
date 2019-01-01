@extends('layout')

@section('title', 'Login(Consultant)')

@section('content')
<link rel="stylesheet" type="text/css" href="css/page2.css">
    <section once="" class="cid-ra90iOq3RC" id="footer7-1d">
    <form style="margin-right: auto; margin-left: auto; display: block;" id="form-regis" class="mbr-form" action="{{ url('consultant-login') }}" method="post" data-form-title="Mobirise Form">
    @csrf
        <div class="wrapper">
            <div class="container-box">
              <label>Email</label>
              <input type="text" name="email" placeholder="Email">
              <label>Password</label>
              <input type="Password" name="password" placeholder="Password">
              <button id="button-login" type="submit">Login</button>
            </div>
           
        </div>

   </form>
   </section>
@endsection