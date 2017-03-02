@extends('layout.master')
@section('css')
<style type="text/css">
	.template-section{
		overflow: hidden;
		padding: 30px 0px;
	}
</style>
@endsection
@section('content')
@include('include.topbar2')
<section class="template-section">
	<div class="col-md-12 header-title">
		<div class="container">
			<div class="wow fadeInDown">
				<h2>The beauty of the design <br> make you satisfied</h2>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="col-md-12" style="padding-top: 70px;" id="containernya">
			@foreach($template as $datanya)
			<div class="col-md-4">
				<div class="box-img-port hovereffect">
					<img src="{{asset('img/'.$datanya->gambar)}}" class="img-responsive" style="height: 300px!important;">
					<div class="overlay">
						<h2 style="font-size: 22px!important;">{{$datanya->nama}}</h2>
						<a class="info" href="{{url('template/detail/'.$datanya->id)}}">Detail</a>
						<a class="info" href="{{$datanya->link}}" target="_blank">Demo</a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	<div class="col-md-12 text-center" style="padding-bottom:20px;">
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
							'<img src="{{asset('img')}}/'+value.gambar+'" style="height: 300px!important;">'+
							'<div class="overlay">'+
							'<h2 style="font-size: 22px!important;">'+value.nama+'</h2>'+
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