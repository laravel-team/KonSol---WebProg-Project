@extends('layout')

@section('title', 'Register')

@section('content')
<link rel="stylesheet" type="text/css" href="css/page2.css">

<section once="" class="cid-ra90iOq3RC" id="footer7-1d">
  <form style="margin-right: auto; margin-left: auto; display: block;" id="form-regis" class="mbr-form" action="{{url('register')}}" method="post" data-form-title="Mobirise Form" ENCTYPE="multipart/form-data">
    @csrf
<!--        <input type="hidden" name="email" data-form-email="true" value="5rBZx4cHnn5n+400TDzsWfeTgEvY/9hmLckK+2nI+v4zOOF7LTZhQ3NqKmT6+1zSPhEKETQgH9bwEmNXGC0v8nwZgV+3mfWgXwGt/Qj8qVr4hGB3FgYDfWJPbIkUvLiL" data-form-field="Email"> -->
        <div class="wrapper" style="height: 110vh !important">
            <div class="container-box">
              <label>Name</label>
              <input type="text" name="name" >

              <label>Email</label>
              <input type="Email" name="email" >

              <label>Password</label>
              <input type="Password" name="password" >

              <label>Gender</label>
              <input type="text" name="gender" >

             <!--  <label>Date of Birth</label>
              <input type="text" name="dob" > -->

              <!-- <label>Address</label>
              <input type="text" name="address" > -->

              <!-- <label>Phone Number</label>
              <input type="text" name="contactNumber" > -->

              <label>Profile Picture</label>
              <label for="file-upload" class="button-upload">
              <img style="width: 5%; margin-right: 1%" src="assets/images/upload.png"> Upload
              </label>
              <input id="file-upload" type="file"/>
              
              <button href="" type="submit" id="button-login" style="margin-top: 8%;">Send Form</button>
            </div>
           
        </div>
    </form>

@endsection

