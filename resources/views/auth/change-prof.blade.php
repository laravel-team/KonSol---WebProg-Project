@extends('layoutMember')

@section('title', 'Change Profile')

@section('content')
<link rel="stylesheet" type="text/css" href="css/page2.css">

<section once="" class="cid-ra90iOq3RC" id="footer7-1d">
  <form style="margin-right: auto; margin-left: auto; display: block;" id="form-regis" class="mbr-form" action="update-profile/{{Session::get('id')}}" method="post" data-form-title="Mobirise Form" ENCTYPE="multipart/form-data">
    @csrf

<!--        <input type="hidden" name="email" data-form-email="true" value="5rBZx4cHnn5n+400TDzsWfeTgEvY/9hmLckK+2nI+v4zOOF7LTZhQ3NqKmT6+1zSPhEKETQgH9bwEmNXGC0v8nwZgV+3mfWgXwGt/Qj8qVr4hGB3FgYDfWJPbIkUvLiL" data-form-field="Email"> -->
        {{ method_field('PATCH') }}
        <div class="wrapper" style="height: 130vh !important">
            <div class="container-box">
              <label>Name</label>
              <input type="text" name="name" placeholder="Name" value="{{Session::get('login')}}">

              <label>Email</label>
              <input type="Email" name="email" placeholder="Email" value="{{Session::get('email')}}">

              <label>Password</label>
              <input type="Password" name="password" placeholder="Password" value="{{Session::get('password')}}">

              <label>Gender</label>
              <div class="Gender">
                  <select name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
              </div>
              
              <label>Date of Birth</label>
              <div class="DOB">
                <select id="years" name="years"></select>
                <select id="months" name="months"></select>
                <select id="days" name="days"></select>
              </div>
              
              <label>Address</label>
              <input type="text" name="address" placeholder="Address" value="{{Session::get('address')}}">

              <label>Phone Number</label>
              <input type="text" name="contactNumber" placeholder="Phone Number" value="{{Session::get('phone')}}">

              <!-- <br> -->
              <label>Profile Picture</label>
              <label for="file-upload" class="button-upload">
              <img style="width: 5%; margin-right: 1%" src="assets/images/upload.png"> Upload
              </label>
              <input id="file-upload" type="file" name="image" />
              
              <button href="" type="submit" id="button-login" style="margin-top: 8%;">Update Profile</button>
              
              @if(isset($errors))
                {{$errors->first()}}
              @endif
            </div>
           
        </div>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];

      for (i = new Date().getFullYear(); i > 1900; i--){
          $('#years').append($('<option />').val(i).html(i));
      }
          
      for (i = 1; i < 13; i++){
          $('#months').append($('<option />').val(i).html(i));
      }

      updateNumberOfDays(); 
    
      $('#years, #months').on("change", function(){
          updateNumberOfDays(); 
      });


      function updateNumberOfDays(){
          $('#days').html('');
          month=$('#months').val();
          year=$('#years').val();
          days=daysInMonth(month, year);

          for(i=1; i < days+1 ; i++){
                  $('#days').append($('<option />').val(i).html(i));
          }
          $('#message').html(monthNames[month-1]+" in the year "+year+" has <b>"+days+"</b> days");
      }

      function daysInMonth(month, year) {
          return new Date(year, month, 0).getDate();
      }
    </script>

@endsection

