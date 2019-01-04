@extends('layoutMember')

@section('title', 'Your Schedule')
@section('content')
    <section once="" class="cid-rbr8NdxSJ4" id="footer7-1d">
          <div class="wrapper">
          	<div class="mbr-figure">
            	<img src="{{ $consultant->profilePicture}}" style="width: 38% !important; float: left !important; margin-right: 3%;">
        	</div>
              <div class="container-box">
                  <div class="Top">
                    <h2>Your Schedule : </h2>
                  </div>
                      <div style="padding: 3px">
                          <table>
                          	<tr>
                          		<td>Consult with</td>
                          		<td>:</td>
                          		<td>{{ $schedule[0]->consultantName }}</td>
                          	</tr>
                          	<tr>
                          		<td>On</td>
                          		<td>:</td>
                          		<td>{{ $schedule[0]->consultationDate}} @ {{ $schedule[0]->consultationTime }} for {{ $schedule[0]->duration }} hours</td>
                          	</tr>
                          	<tr>
                          		<td>Category</td>
                          		<td>:</td>
                          		<td>{{ $schedule[0]->categoryName }}</td>
                          	</tr>
                          	<tr>
                          		<td>Topic</td>
                          		<td>:</td>
                          		<td>{{ $schedule[0]->topic }}</td>
                          	</tr>
                          	<tr>
                          		<td>Consultation Method</td>
                          		<td>:</td>
                          		<td>{{ $schedule[0]->consultationMethod }}</td>
                          	</tr>
                          	@if($schedule[0]->consultationMethod == "Meeting")
                          	<tr>
                          		<td>Meeting Location</td>
                          		<td>:</td>
                          		<td>{{ $schedule[0]->location }}</td>
                          	</tr>
                          	@endif
                          	<tr>
                          		<td>Total Price</td>
                          		<td>:</td>
                          		<td>{{ $schedule[0]->price }}</td>
                          	</tr>
                          </table>
                          <br>
                          <a type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Edit Book</a>
                          <a type="button" class="btn btn-info btn-sm" href="{{ url('deleteFromBooking') }}/{{$schedule[0]->consultationBookingID}}">Cancel</a>
                      </div>
              </div>
          </div>
          @if(isset($errors))
                <p style="font-weight: bold; color: red;">{{$errors->first()}}</p>
        @endif
   </section>

  <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Book Consultation</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      	<form id="form-book" class="mbr-form" action="{{url('saveEditedBook')}}" method="post" data-form-title="Mobirise Form">
      	{{ csrf_field() }}
      	<input type="hidden" name="consultationBookingID" value="{{ $schedule[0]->consultationBookingID }}">
      	<input type="hidden" name="consultantID" value="{{ $consultant->consultantID}}">
      	<p>Consultation Category : {{ $schedule[0]->categoryName }} <input type="hidden" name="categoryID" value="{{ $schedule[0]->categoryID}}"></p>
      	<p>Topic : <input type="text" name="topic" value="{{ $schedule[0]->topic }}"></p>
        <p>Consultation Date : 
        	<div class="date">
                <select id="days" name="days"></select>
                <select id="months" name="months"></select>
                <select id="years" name="years"></select>
            </div>
        </p>
        <p>Consultation Time : <input type="text" name="time" value="{{ $schedule[0]->consultationTime }}"></p>
        <p>Duration : <input type="text" name="duration" value="{{ $schedule[0]->duration }}"> Hours</p>
        <p>Consultation Method : 
        	<select name="method" id="method">
      		@foreach($consultationMethods as $method)
      			<option value="{{ $method->consultationMethodID }}">{{ $method->name }}</option>
      		@endforeach
      		</select>
        </p>
        <p>Location : <input type="text" name="location" id="location" value="" disabled></p>
        <p>Price : <span id="totalPrice"></span> <input type="hidden" name="totalPrice"></p>
        </form>
      </div>
      <div class="modal-footer">
      	<button type="submit" class="btn btn-default" onclick="document.getElementById('form-book').submit()">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];
	var currentPrice = "{{ $schedule[0]->price }}";
	var totalPrice = "{{ $schedule[0]->price }}";

$('#totalPrice').text("Rp. "+totalPrice);
$('[name=totalPrice]').val(totalPrice);

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

$('[name=duration]').focusout(function(){
    	totalPrice = $(this).val() * currentPrice;
    	$('#totalPrice').text("Rp. "+totalPrice);
    	$('[name=totalPrice]').val(totalPrice);
    });
</script>
@endsection