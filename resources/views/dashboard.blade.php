@extends('layoutMember')

@section('title', 'Dashboard')
@section('content')
<link rel="stylesheet" type="text/css" href="css/dashboard.css">
<link rel="stylesheet" type="text/css" href="css/page2.css">
<section class="counters2 counters cid-rbr8NdxSJ4" id="counters2-2">
    <div class="container pt-4 mt-2">
        <div style="padding: 1%; margin-bottom: 6%;">
            <div class="media-container-row">
                <div class="media-block" style="width: 38%;">
                    
                    <div class="mbr-figure">
                        @if(session('photo'))
                            <img src="assets/images/{{Session::get('photo')}}">
                        @else
                            <img src="assets/images/default-pp.jpg">
                        @endif
                    </div>

                    <h2 style="border-top: 3px solid #149dcc; margin-top: 3%" class="mbr-section-title pb-3 align-left mbr-fonts-style display-2 mr-auto">
                        {{Session::get('login')}}</h2>
                </div>

                <div style="margin-left: 5%" class="cards-block">
                    <div class="cards-container">
                        <div class="card px-3 align-left col-12 col-md-6">
                            <div class="panel-item p-3">
                                <div class="card-img pb-3">
                                    <span class="mbri-edit mbr-iconfont pr-2"></span>
                                    <h3 class="count py-3 mbr-fonts-style display-2">
                                        {{$bookingCount}}
                                    </h3>
                                </div>
                                <div class="card-text">
                                    <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                        Your Bookings
                                    </h4>

                                    <label class="mbr-content-text mbr-fonts-style display-7">
                                        Book : {{$bookingCount}}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="card px-3 align-left col-12 col-md-6">
                            <div class="panel-item p-3">
                                <div class="card-img pb-3">
                                    <span class="mbri-cash mbr-iconfont pr-2"></span>
                                    <h3 class="count py-3 mbr-fonts-style display-2">
                                        {{ Session::get('konWallet') }}
                                    </h3>
                                </div>
                                <div class="card-text">
                                    <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                        Your KonWallet
                                    </h4>

                                    <label class="mbr-content-text mbr-fonts-style display-7">
                                        Rp. {{ Session::get('konWallet') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <button id="button-log" class="mr-auto col-md-5"><a href="{{ url('kontext-login')}}"><span class="mbri-chat" style="margin-right: 10%;"></span>KonText</a></button>
                        <button id="button-log" class="mr-auto col-md-5"><a href="{{ url('konface-login')}}"><span class="mbri-desktop" style="margin-right: 10%;"></span>KonFace</a></button>

                    </div>
                </div>
            </div>
        </div>

<!--         <div class="col-md-12">
             <div class="row">
                <div class="col">
                    <div style="padding:1.5%; border: 1px solid #149dcc; height: 200px; overflow: scroll;">
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
                    <div style="padding:1.5%; border: 1px solid #149dcc; height: 200px; overflow: scroll;">
                        Your History:
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div class="col-md-12" style="padding:1.5%;">
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
    </div> -->

  <section class="tabs3 cid-re9yCidFyg" id="tabs3-2h">
    <div class="container" style="border-bottom: 3px solid #149dcc; border-top: 3px solid #149dcc">
        <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">Dashboard</h2>
    </div>
    <div class="container-fluid">
        <div class="row tabcont">
            <ul class="nav nav-tabs pt-3 mt-5" role="tablist">
                <li class="nav-item mbr-fonts-style"><a class="nav-link active show display-7" role="tab" data-toggle="tab" href="#tabs3-2h_tab0" aria-selected="true">
                        Top Up
                    </a></li>
                <li class="nav-item mbr-fonts-style"><a class="nav-link active show display-7" role="tab" data-toggle="tab" href="#tabs3-2h_tab2" aria-selected="true">
                        Schedule
                    </a></li>
                <li class="nav-item mbr-fonts-style">
                    <a class="nav-link display-7" role="tab" data-toggle="tab" href="#tab4">
                        History
                    </a>
                </li>
                
                <li class="nav-item mbr-fonts-style">
                    <a class="nav-link  active show display-7" role="tab" data-toggle="tab" href="#tabs3-2h_tab1" aria-selected="true">
                        Consult Today
                    </a>
                </li>
                
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row px-1">
            <div class="tab-content">
                <div id="tab1" class="tab-pane in active mbr-table" role="tabpanel">
                    <div class="row tab-content-row">
                        <div class="col-xs-12 col-md-6" style="border-right: 3px solid #149ccc">
                            <div class="card-img ">
                                <span class="mbri-cash mbr-iconfont" style="display: block; margin-left: auto; margin-right: auto;"></span>
                            </div>
                            <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                                Your Current Money :&nbsp;</h4>
                            <p class="mbr-section-text  align-center mbr-fonts-style display-7">Rp. {{ Session::get('konWallet')}}</p>
                        </div>

                        <div class="col-xs-12 col-md-6" style="margin-top: 1.5%;">                 
                            <form action="{{ url('topup') }}" method="post">
                                {{ csrf_field() }}
                                <label style="font-size: 26px" class="mbr-element-title mbr-fonts-style pb-2 display-5">
                                Input Money :&nbsp;</label>
                                <input type="text" name="money" placeholder="Input your money here..." value="{{ old('money') }}" style="border-radius: 25px; border: 2px solid #149ccc; padding: 1.5%; width: 67%;">
                                <button id="button-login" type="submit" style="width: 50%; display: block; margin-left: auto; margin-right: auto;">Top Up</button>
                            </form>
                            @if(isset($errors))
                               <p style="font-weight: bold; color: red;">{{$errors->first()}}</p>
                            @endif
                        </div>    
                    </div>
                </div>

                <div id="tab2" class="tab-pane  mbr-table" role="tabpanel">
                    <div class="row tab-content-row">
                        <div class="col-xs-12 col-md-6">
                            <div class="card-img ">
                                <span class="mbri-calendar mbr-iconfont" style="display: block; margin-left: auto; margin-right: auto;"></span>
                            </div>
                            <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                                Your Schedule
                            </h4>

                            <div class="col">
                                <div style="padding:1.5%; border: 1px solid #149dcc; height: 150px; overflow: scroll;">
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
                    </div>
                </div>

                <div id="tab3" class="tab-pane  mbr-table" role="tabpanel">
                    <div class="row tab-content-row">
                        <div class="col-xs-12 col-md-6">
                            <div class="card-img ">
                                <span class="mbri-clock mbr-iconfont" style="display: block; margin-left: auto; margin-right: auto;"></span>
                            </div>
                            <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                                History
                            </h4>

                            <div class="col">
                                <div style="padding:1.5%; border: 1px solid #149dcc; height: 150px; overflow: scroll;">

                                </div>
                            </div>
                        </div>                        
                    </div>      
                </div>

                <div id="tab3" class="tab-pane  mbr-table" role="tabpanel">
                    <div class="row tab-content-row">
                        <div class="col-xs-12 col-md-6">
                            <div class="card-img ">
                                <span class="mbri-calendar mbr-iconfont" style="display: block; margin-left: auto; margin-right: auto;"></span>
                            </div>
                            <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                                Consult Today
                            </h4>

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
                </div>
            </div>
        </div>
    </div>
</section>
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
  <script src="assets/mbr-tabs/mbr-tabs.js"></script>
  
@endsection