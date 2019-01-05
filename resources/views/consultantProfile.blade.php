@extends('layoutMember')

@section('title', 'Consultant Profile')
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
                        Name : {{ $consultant->name }} <br>
                        Email : {{ $consultant->email }} <br>
                        Corporate : {{ $consultant->corporate }} <br>
                        Contact Number : {{ $consultant->contactNumber }} <br>

                        @foreach($detailConsultant as $detail)
                            Category: {{ $detail->categoryName }} <br>
                            Price : {{ $detail->price }} / Hour <br>
                        @endforeach
                    </p>
                </div>
                            
                <div class="mbr-section-btn">       
                    <button type="button" class="btn btn-md btn-primary display-4" data-toggle="modal" data-target="#myModal" onclick="setModalInput({{ $detail->categoryID }}, '{{ $detail->categoryName }}', {{ $detail->price }})" style="border-radius: 10px 10px 10px 10px; background: #144">Book Now
                    </button>
                </div>

                @if(isset($errors))
                        <p style="font-weight: bold; color: red;">{{$errors->first()}}</p>
                @endif
            </div>
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
        {{ csrf_field() }}
        <input type="hidden" name="consultantID" value="{{ $consultant->consultantID}}">
        <p>Consultation Category : <span id="category"></span> <input type="hidden" name="categoryID"></p>
        <p>Topic : <input type="text" name="topic"></p>
        <p>Consultation Date : 
            <div class="date">
                <select id="days" name="days"></select>
                <select id="months" name="months"></select>
                <select id="years" name="years"></select>
            </div>
        </p>
        <p>Consultation Time : <input type="text" name="time"></p>
        <p>Duration : <input type="text" name="duration"> Hours</p>
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
        <button type="submit" class="btn btn-default" onclick="document.getElementById('form-book').submit()">Book</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];
    var currentPrice = 0;
    var totalPrice = 0;

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

    function setModalInput(categoryID, categoryName, categoryPrice){
        currentPrice = categoryPrice;
        $('#category').text(categoryName);
        $('[name=categoryID]').val(categoryID);
    }

    $('[name=duration]').focusout(function(){
        totalPrice = $(this).val() * currentPrice;
        $('#totalPrice').text("Rp. "+totalPrice);
        $('[name=totalPrice]').val(totalPrice);
    });
</script>
@endsection