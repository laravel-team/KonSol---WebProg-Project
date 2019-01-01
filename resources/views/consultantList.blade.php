@foreach($consultants as $consultant)
    <a href=""><div class="col-6 col-md-4">
        <div class="mbr-figure p-3">
            <a href="{{ url('consultant/'.$consultant->consultantID) }}"><img src="{{ $consultant->profilePicture }}"></a>
            Name: {{ $consultant-> name}} <br>
            Corporate : {{ $consultant-> corporate }}
        </div>
    </div></a>
@endforeach