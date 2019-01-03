@extends('layoutMember')

@section('title', 'Consultation')
@section('content')
<link rel="stylesheet" type="text/css" href="css/page2.css">
    <section once="" class="cid-ra90iOq3RC" id="footer7-1d">
          <div class="wrapper">
              <div class="container-box">
                  <div class="Top">
                    <h2>Consultation : </h2>
                  </div>
                  
                  <select class="consult" id="sortByCategory">
                    <option value="all">All</option>
                    @foreach($categories as $category)
                      <option value="{{ $category->categoryID }}">{{ $category->name }}</option>
                    @endforeach
                  </select>
                  <div class="row" id="consultantList">
                      
                  </div>
              </div>
          </div>

   </section>
@endsection

@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		$.ajax({
			type : "GET",
      		url : "consultant/sort/all",
      		success : function(response){
      			$('#consultantList').html(response);
      		}
		});
	});

	$('#sortByCategory').change(function(){
		$.ajax({
			type : "GET",
      		url : "consultant/sort/"+$('#sortByCategory option:selected').val(),
      		success : function(response){
      			$('#consultantList').html(response);
      		}
		});
	});
</script>
@endsection