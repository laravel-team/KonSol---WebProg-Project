@extends('layoutMember')

@section('title', 'Top Up')
@section('content')
<section class="counters2 counters cid-rbr8NdxSJ4" id="counters2-2">
Current Money : {{ Session::get('konWallet')}}
<br>
<form action="{{ url('topup') }}" method="post">
	{{ csrf_field() }}
	<label>Input Money : </label>
    <input type="text" name="money" placeholder="Input your money here..." value="{{ old('money') }}">
    <button type="submit">Top Up</button>
</form>
@if(isset($errors))
   <p style="font-weight: bold; color: red;">{{$errors->first()}}</p>
@endif
</section>
@endsection