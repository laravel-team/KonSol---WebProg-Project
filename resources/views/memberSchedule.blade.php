@extends('layoutMember')

@section('title', 'Your Schedule')
@section('content')
<link rel="stylesheet" type="text/css" href="css/page2.css">
    <section once="" class="cid-ra90iOq3RC" id="footer7-1d">
          <div class="wrapper">
              <div class="container-box">
                  <div class="Top">
                    <h2>Your Schedule : </h2>
                  </div>
                  
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