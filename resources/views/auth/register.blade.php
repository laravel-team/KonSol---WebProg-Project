@extends('layout')

@section('title', 'Register')

@section('content')
<div class="container">
<br><br><br><br>
<section once="" class="cid-ra90iOq3RC" id="footer7-1d">
  <form id="form-regis" class="mbr-form" action="{{url('register')}}" method="post" data-form-title="Mobirise Form">
    @csrf
<!--        <input type="hidden" name="email" data-form-email="true" value="5rBZx4cHnn5n+400TDzsWfeTgEvY/9hmLckK+2nI+v4zOOF7LTZhQ3NqKmT6+1zSPhEKETQgH9bwEmNXGC0v8nwZgV+3mfWgXwGt/Qj8qVr4hGB3FgYDfWJPbIkUvLiL" data-form-field="Email"> -->
        <div class="wrapper">
            <div class="container-box">
              <label>Name</label>
              <input type="text" name="name" >

              <label>Email</label>
              <input type="Email" name="email" >

              <label>Password</label>
              <input type="Password" name="password" >

              <label>Gender</label>
              <input type="text" name="gender" >

              <label>Date of Birth</label>
              <input type="text" name="dob" >

              <label>Address</label>
              <input type="text" name="address" >

              <label>Phone Number</label>
              <input type="text" name="contactNumber" >

              <label>Profile Picture</label>
              <input type="text" name="profilePicture" >

              <button href="" type="submit" id="button-login">Send Form</button>
            </div>
           
        </div>
    </form>
</div>
@endsection
