@foreach($consultants as $consultant)
        <div class="mbr-figure p-3" style="width: 100% !important;border: 1px solid black;background-color: rgba(0,0,0,.2); border-radius: 10px; margin-bottom: 10px;"  >
            <a href="{{ url('consultant/'.$consultant->consultantID) }}"><img src="{{ $consultant->profilePicture }}" style="width: 100px;float: left; margin-right: 5%;"></a>
            Name: {{ $consultant-> name}} <br>
            Corporate : {{ $consultant-> corporate }}
        </div>
@endforeach