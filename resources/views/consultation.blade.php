@extends('layoutMember')

@section('title', 'Consultation')
@section('content')
<section class="counters2 counters cid-rbr8NdxSJ4" id="counters2-2">
	<div class="col-md-12">
        <select id="sortByCategory">
        	<option value="all">All</option>
        	@foreach($categories as $category)
        		<option value="{{ $category->categoryID }}">{{ $category->name }}</option>
        	@endforeach
        </select>
             <div class="row" id="consultantList">
                
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