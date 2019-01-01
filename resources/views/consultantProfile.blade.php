@extends('layoutMember')

@section('title', 'Consultant Profile')
@section('content')
<section class="counters2 counters cid-rbr8NdxSJ4" id="counters2-2">
	<div class="media-block" style="width: 38%;">
        <div class="mbr-figure">
            <img src="{{ $consultant->profilePicture}}">
        </div>
        Name : {{ $consultant->name }} <br>
        Email : {{ $consultant->email }} <br>
        Corporate : {{ $consultant->corporate }} <br>
        Contact Number : {{ $consultant->contactNumber }}

        <div class="row">
            @foreach($detailConsultant as $detail)
            <div class="col-6 col-md-4">
                <div class="mbr-figure p-3">
                    Category: {{ $detail->categoryName }} <br>
                    Price : {{ $detail->price }} / Hour <br>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Book Now</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Book Consultation</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      	<form id="form-book" class="mbr-form" action="{{url('book')}}" method="post" data-form-title="Mobirise Form">
      	<p>Consultation Category : 
      		<select name="category" disabled>
      		@foreach($detailConsultant as $detail)
      			<option value="{{ $detail->categoryID }}">{{ $detail->categoryName }}</option>
      		@endforeach
      		</select>
      	</p>
      	<p>Topic : <input type="text" name="topic"></p>
        <p>Consultation Date : 
        	<div class="date">
                <select id="days" name="days"></select>
                <select id="months" name="months"></select>
                <select id="years" name="years"></select>
            </div>
        </p>
        <p>Consultation Time : <input type="text" name="time"></p>
        <p>Duration : <input type="text" name="duration"></p>
        <p>Consultation Method : 
        	<select name="method" id="method">
      		@foreach($consultationMethods as $method)
      			<option value="{{ $method->consultationMethodID }}">{{ $method->name }}</option>
      		@endforeach
      		</select>
        </p>
        <p>Location : <input type="text" name="location" id="location" value="" disabled></p>
        <p>Price : <span id="totalPrice"></span></p>
        </form>
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-default" data-dismiss="modal">Book</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endsection

@section('script')
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

    $('#method').change(function(){
    	if($('#method option:selected').val() != 3){
    		$('#location').val("");
    		$('#location').prop('disabled', true);
    	}else{
    		$('#location').prop('disabled', false);
    	}
    });
</script>
@endsection