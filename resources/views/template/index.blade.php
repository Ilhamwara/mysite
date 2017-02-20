@extends('layout.master')
@section('css')
<style type="text/css">
	.template-section{
		padding: 100px 0px;
		overflow: hidden;
	}
</style>
@endsection
@section('content')
@include('include.topbar2')
<section class="template-section">
	<div class="container" id="containernya">
		@foreach($template as $datanya)
		<div class="col-md-4">
			<div class="box-img-port hovereffect">
				<img src="{{asset('img/'.$datanya->gambar)}}" width="300">
				<div class="overlay">
					<h2>{{$datanya->nama}}</h2>
					<a class="info" href="{{url('template/detail/'.$datanya->id)}}"><i class="fa fa-eye"></i></a>
					<a class="info" href="{{$datanya->link}}" target="_blank"><i class="fa fa-globe"></i></a>
				</div>
			</div>
		</div>
		@endforeach
	</div>
	<div class="col-md-12 text-center">
		<br><br>
		<button class="btn-more" onclick="loadmore(3,6)" id="loadMore" style="border: none;">
		See More
		</button>
	</div>
</div>
</section>
@include('include.footer')
@section('js')
<script type="text/javascript">
	function loadmore(take, skip) {
		$.ajax({
			url 		: 'template/loadmore/'+take+'/'+skip,
			type 		: 'GET',
			dataType 	: 'JSON',
			beforeSend	: function(){
				$('#loadMore').prop('disable', true).html('<i class="fa fa-spinner"></i>Loading..');
			},
			success		: function(response){
				if(response.status){
					//Hide loading
					$('#loadMore').html('See More').prop('disable',false);

					//Munculin disini pake apppend
					if($.isArray(response.data.post)){
						$.each(response.data.post, function(key, value){
							var pender = 
							'<div class="col-md-4">'+
							'<div class="box-img-port hovereffect">'+
							'<img src="{{asset('img')}}/'+value.gambar+'" width="300">'+
							'<div class="overlay">'+
							'<h2>'+value.nama+'</h2>'+
							'<a class="info" style="margin-right:5px;" href="{{url('template/detail')}}/'+value.id+'">'+
							'<i class="fa fa-eye"></i></a>'+
							'<a class="info" href="'+value.link+'" target="_blank">'+
							'<i class="fa fa-globe"></i></a>'+
							'</div>'+
							'</div>'+
							'</div>';

							$('#containernya').append(pender);
						});
					}
					skip = skip + 3;
					$('#loadMore').attr('onclick', 'loadmore('+take+','+skip+')');
					if ($.isArray(response.data.post) == '0') {
						$('#loadMore').hide();
					}
				}
				else{
					var dialog = confirm('Loadmore Gagal');
					if (dialog) {
						window.location.reload();
					}
				}
				console.log(response);
			},
			error	: function(){
				var dialog = confirm('Loadmore Gagal');
				if (dialog) {
					window.location.reload();
				}
				console.log(response);
			}
		});
	};
</script>
@endsection
@endsection