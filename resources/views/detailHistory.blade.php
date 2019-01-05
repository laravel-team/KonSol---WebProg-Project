@extends('layoutMember')

@section('title', 'Your History')
@section('content')
<section class="engine"><a href="https://mobirise.me/q">free responsive site templates</a></section><section class="header3 cid-recehG372s" id="header3-2p">
    <div class="container">
        <div class="media-container-row">
            <div class="mbr-figure" style="width: 100%;">
                <img src="{{ $consultant->profilePicture}}" alt="Mobirise">
            </div>

              <div class="media-content" style="margin-top: 1%; border: 3px solid white;">

                <div class="mbr-section-text mbr-white pb-3" style="padding: 2%">
                    <p class="mbr-text mbr-fonts-style display-5">
                          		Consult with : {{ $history[0]->consultantName }} <br>
                          		On : {{ $history[0]->consultationDate}} @ {{ $history[0]->consultationTime }} for {{ $history[0]->duration }} hours <br>
                          		Category : {{ $history[0]->categoryName }} <br>
                          		Topic : {{ $history[0]->topic }} <br>
                              Location : {{ $history[0]->location }} <br>
                          		Total Price : {{ $history[0]->price }} <br>
                      </div>
              </div>
          </div>
   </section>
@endsection