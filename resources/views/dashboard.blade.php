@extends('layoutMember')

@section('title', 'Dashboard')
@section('content')
<link rel="stylesheet" type="text/css" href="css/dashboard.css">
<section class="counters2 counters cid-rbr8NdxSJ4" id="counters2-2">
    <div class="container pt-4 mt-2">
        <div class="media-container-row">
            <div class="media-block" style="width: 38%;">
                
                <div class="mbr-figure">
                    @if(session()->has('photo'))
                        <img src="assets/images/{{Session::get('photo')}}">
                    @else
                        <img src="assets/images/default-pp.jpg">
                    @endif
                </div>

                <h2 style="border-top: 3px solid black; margin-top: 2%" class="mbr-section-title pb-3 align-left mbr-fonts-style display-2">
                    {{Session::get('login')}}</h2>
            </div>
            <div style="margin-left: 5%" class="cards-block">
                <div class="cards-container">
                    <div class="card px-3 align-left col-12 col-md-6">
                        <div class="panel-item p-3">
                            <div class="card-img pb-3">
                                <span class="mbri-mobirise mbr-iconfont pr-2"></span>
                                <h3 class="count py-3 mbr-fonts-style display-2">
                                    {{ $bookingCount }}
                                </h3>
                            </div>
                            <div class="card-text">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                    Your Bookings
                                </h4>
                                <p class="mbr-content-text mbr-fonts-style display-7">
                                    Nearest Schedule: {{ $schedules->first()->consultationDate }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card px-3 align-left col-12 col-md-6">
                        <div class="panel-item p-3">
                            <div class="card-img pb-3">
                                <span class="mbri-extension mbr-iconfont pr-2"></span>
                                <h3 class="count py-3 mbr-fonts-style display-2">
                                    {{ Session::get('konWallet') }}
                                </h3>
                            </div>
                            <div class="card-text">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                    Your KonWallet
                                </h4>
                                <p class="mbr-content-text mbr-fonts-style display-7">
                                    Rp. {{ Session::get('konWallet') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <button id="button-login" class="mr-auto col-md-5"><a href="{{ url('kontext-login') }}" style="co">KonText</a></button>
                    <button id="button-login" class="mr-auto col-md-5"><a href="{{ url('konface-login') }}">KonFace</a></button>

                </div>
            </div>
        </div>
        <div class="col-md-12">
             <div class="row">
                <div class="col">
                    <div style="border: 1px solid black; height: 200px; overflow: scroll;">
                        Your Schedule:
                        @foreach($schedules as $schedule)
                            <div style="padding: 3px">
                                <hr>
                                Consult with : {{ $schedule->consultantName }} <br>
                                On : {{ $schedule->consultationDate}} @ {{ $schedule->consultationTime }} for {{ $schedule->duration }} hours <br>
                                Topic : {{ $schedule->topic }} - {{ $schedule->categoryName }}
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col">
                    <div style="border: 1px solid black; height: 200px; overflow: scroll;">
                        Your History:
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div class="col-md-12">
        Consult today
             <div class="row">
                @foreach($consultants as $consultant)
                <a href=""><div class="col-6 col-md-4">
                    <div class="mbr-figure p-3">
                        <a href="{{ url('consultant/'.$consultant->consultantID) }}"><img src="{{ $consultant->profilePicture}}"></a>
                        Name: {{ $consultant-> name}} <br>
                        Corporate : {{ $consultant-> corporate }}
                    </div>
                </div></a>
                @endforeach
            </div>
        </div>
    </div>
</section>

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <!-- <script src="assets/dropdown/js/script.min.js"></script> -->
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
@endsection