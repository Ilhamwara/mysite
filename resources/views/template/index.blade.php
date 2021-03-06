@extends('layout.master')
@section('css')
<style type="text/css">
	.template-section{
		overflow: hidden;
	}
	.header-title{
		background: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url('{{asset('img/typo.jpg')}}')!important;
		background-size: cover!important; 
		background-repeat: no-repeat!important;
		background-position: top center!important;
		background-attachment: fixed!important;
		text-align: center;
		padding-top: 70px;
		padding-bottom: 100px;
	}
	.header-title h2{
		font-size: 40px; 
		color: #fff; 
	}
	#portfoliolist .portfolio {
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		-o-box-sizing: border-box;
		display:none;
		overflow:hidden;
	}

</style>
@endsection
@section('content')

<section class="template-section">
	<div class="col-md-12 header-title">
		<div class="container">
			<div class="wow fadeInDown">
				<h2>The beauty of the design <br> make you satisfied</h2>
			</div>
		</div>
	</div>
	@include('include.topbar2')
	<div class="container">
		<div class="col-md-12" style="padding: 20px 0px;">
			<div id="portfoliolist">
				<div class="col-md-4 portfolio pers" data-cat="pers">
					<div class="box-img-port hovereffect">
						<img src="{{asset('img/header.jpg')}}" class="img-responsive">
						<div class="overlay">
							<h2>Saya</h2>
							<a class="info" href="">Detail</a>
							<a class="info" href="" target="_blank">Demo</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 portfolio comp" data-cat="comp">
					<div class="box-img-port hovereffect">
						<img src="{{asset('img/ilham.png')}}" class="img-responsive">
						<div class="overlay">
							<h2>Saya</h2>
							<a class="info" href="">Detail</a>
							<a class="info" href="" target="_blank">Demo</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 portfolio admin" data-cat="admin">
					<div class="box-img-port hovereffect">
						<img src="{{asset('img/temp1.jpg')}}" class="img-responsive">
						<div class="overlay">
							<h2>Saya</h2>
							<a class="info" href="">Detail</a>
							<a class="info" href="" target="_blank">Demo</a>
						</div>
					</div>
				</div>
			</div>
			

			@foreach($template as $datanya)
			<div class="col-md-4 portfolio {{$datanya->type}}" data-cat="{{$datanya->type}}">
				<div class="box-img-port hovereffect">
					<img src="{{asset('img/template/'.$datanya->gambar)}}" class="img-responsive">
					<div class="overlay">
						<h2>{{$datanya->nama}}</h2>
						<a class="info" href="{{url('template/detail/'.$datanya->id)}}">
							Detail
						</a>
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('js/jquery.mixitup.min.js')}}"></script>
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
							'<div class="col-md-4 portfolio'+value.type+'" data-cat="'+value.type+'">'+
							'<div class="box-img-port hovereffect">'+
							'<img src="{{asset('img')}}/template/'+value.gambar+'">'+
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
<script type="text/javascript">
	$(function () {
		
		var filterList = {

			init: function () {

			// MixItUp plugin
			// http://mixitup.io
			$('#portfoliolist').mixItUp({
				selectors: {
					target: '.portfolio',
					filter: '.filter'	
				},
				load: {
    		  filter: '.pers, .comp, .trav, .admin, .ac' // show app tab on first load
    		}     
    	});								

		}

	};
	
	// Run the show!
	filterList.init();
	
});
</script>
@endsection
@endsection