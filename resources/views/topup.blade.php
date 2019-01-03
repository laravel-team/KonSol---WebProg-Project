@extends('layoutMember')

@section('title', 'Top Up')
@section('content')

<link rel="stylesheet" type="text/css" href="css/page2.css">
    <section once="" class="cid-ra90iOq3RC" id="footer7-1d">
    <form style="margin-right: auto; margin-left: auto; display: block;" id="form-regis" class="mbr-form" action="{{ url('login') }}" method="post" data-form-title="Mobirise Form">
    @csrf
        <div class="wrapper">
            <div class="container-box">
            	<div class="Top">
              		<h2>Current Money : </h2>
              		<h4 style="padding-left: 7%;">Rp. {{ Session::get('konWallet')}}</h4>
				</div>
				
				<form action="{{ url('topup') }}" method="post">
					{{ csrf_field() }}
					<label>Input Money : </label>
					<input type="text" name="money" placeholder="Input your money here..." value="{{ old('money') }}">
					<button id="button-login" type="submit">Top Up</button>
				</form>
				@if(isset($errors))
				   <p style="font-weight: bold; color: red;">{{$errors->first()}}</p>
				@endif
            </div>
        </div>

   </form>
   </section>
@endsection