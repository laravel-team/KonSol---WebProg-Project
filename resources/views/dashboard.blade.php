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
                                    100
                                </h3>
                            </div>
                            <div class="card-text">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                    TEXT
                                </h4>
                                <p class="mbr-content-text mbr-fonts-style display-7">
                                    Text
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card px-3 align-left col-12 col-md-6">
                        <div class="panel-item p-3">
                            <div class="card-img pb-3">
                                <span class="mbri-extension mbr-iconfont pr-2"></span>
                                <h3 class="count py-3 mbr-fonts-style display-2">
                                    100
                                </h3>
                            </div>
                            <div class="card-text">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                    TEXT
                                </h4>
                                <p class="mbr-content-text mbr-fonts-style display-7">
                                    Text
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <button id="button-login" class="mr-auto col-md-5"><a href="{{ url('kontextLogin') }}" style="co">KonText</a></button>
                    <button id="button-login" class="mr-auto col-md-5"><a href="{{ url('konfaceLogin') }}">KonFace</a></button>

                </div>
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