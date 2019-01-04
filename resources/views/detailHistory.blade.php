@extends('layoutMember')

@section('title', 'Your Schedule')
@section('content')
    <section once="" class="cid-rbr8NdxSJ4" id="footer7-1d">
          <div class="wrapper">
          	<div class="mbr-figure">
            	<img src="{{ $consultant->profilePicture}}" style="width: 38% !important; float: left !important; margin-right: 3%;">
        	</div>
              <div class="container-box">
                  <div class="Top">
                    <h2>Your History : </h2>
                  </div>
                      <div style="padding: 3px">
                          <table>
                          	<tr>
                          		<td>Consult with</td>
                          		<td>:</td>
                          		<td>{{ $history[0]->consultantName }}</td>
                          	</tr>
                          	<tr>
                          		<td>On</td>
                          		<td>:</td>
                          		<td>{{ $history[0]->consultationDate}} @ {{ $history[0]->consultationTime }} for {{ $history[0]->duration }} hours</td>
                          	</tr>
                          	<tr>
                          		<td>Category</td>
                          		<td>:</td>
                          		<td>{{ $history[0]->categoryName }}</td>
                          	</tr>
                          	<tr>
                          		<td>Topic</td>
                          		<td>:</td>
                          		<td>{{ $history[0]->topic }}</td>
                          	</tr>
                            <tr>
                              <td>Location</td>
                              <td>:</td>
                              <td>{{ $history[0]->location }}</td>
                            </tr>
                          	<tr>
                          		<td>Total Price</td>
                          		<td>:</td>
                          		<td>{{ $history[0]->price }}</td>
                          	</tr>
                          </table>
                          <br>
                      </div>
              </div>
          </div>
   </section>
@endsection