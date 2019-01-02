@extends('layoutMember')

@section('title', 'Your Schedule')
@section('content')
<section class="counters2 counters cid-rbr8NdxSJ4" id="counters2-2">
<div class="col-md-12">
    <div class="row">
        <div class="col">
        Your Schedule:
        @foreach($schedules as $schedule)
            <div style="padding: 3px">
                <hr>
                Consult with : {{ $schedule->consultantName }} <br>
                On : {{ $schedule->consultationDate}} @ {{ $schedule->consultationTime }} for {{ $schedule->duration }} hours <br>
                Topic : {{ $schedule->topic }} - {{ $schedule->categoryName }} <br>
                Consultation Method : {{ $schedule->consultationMethod }}
                @if($schedule->consultationMethod == "Meeting")
                	<br> Meeting Location : {{ $schedule->location }}
                @endif
                <!-- <button>Finish</button> -->
                <button onclick="deletefromConsultationBooking({{ $schedule->consultationBookingID }})">Cancel</button>
            </div>
         @endforeach
        </div>
    </div>
</div>
</section>
@endsection

@section('script')
<script type="text/javascript">
	function deletefromConsultationBooking(consultationBookingID){
		$.ajax({
			type : "GET",
      		url : "deleteFromBooking/"+consultationBookingID,
      		success : function(response){
      			if(response == "success") window.location.reload();
      		}
		});
	}
</script>
@endsection