@extends('layout.master')

@section('css')
@endsection

@section('content')
@include('include.topbar')
<section class="first-section" id="home" style="background:    
linear-gradient(
	rgba(0, 0, 0, 1), 
	rgba(0, 0, 0, 0.9)
	),url('{{asset('img/header.jpg')}}');">
	<div class="col-md-12 text-center">
		<div class="logo wow fadeInDown"><b>Imagination & Creativity</b></div>
		<h2 class="wow fadeInDown">Good design is a good business</h2>
		<p class="title-caption">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.
		</p>
		<br>
		<a href="#about" class="gett-started">Getting Started</a>
	</div>	
</section>
<section class="second-section" id="about">
	<div class="container">
		<div class="col-md-12">
			<div class="title text-center wow fadeInDown">
				<h3>Who we are?</h3>
			</div>
		</div>
		<div class="col-md-12">
			<div class="col-md-7 text-center">
				<img src="{{asset('img/about.jpg')}}" class="img-responsive">
			</div>
			<div class="col-md-5" style="padding: 0px 40px;">
				<div class="wow fadeInRight">
					<h3><b>Powerfull Simple Project <br> Management</b></h3>
				</div>
				<p class="wow fadeInRight">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
		</div>
	</div>
</section>
<section class="third-section" id="service">
	<div class="container">
		<div class="col-md-12" id="containernya">
			@foreach($portfolio as $data)
			<div class="col-md-4">
				<div class="box-img-port hovereffect">
					<img src="{{asset('img/'.$data->gambar)}}" width="300">
					<div class="overlay">
						<h2>{{$data->nama}}</h2>
						<a class="info" href="{{url('portfolio/detail/'.$data->id)}}"><i class="fa fa-eye"></i></a>
						<a class="info" href="{{$data->link}}" target="_blank"><i class="fa fa-globe"></i></a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<div class="col-md-12 text-center wow bounceInDown">
			<br>
			<button class="btn-more" onclick="loadmore(3,6)" id="loadMore" style="border: none;">See More
			</button>
		</div>

	</div>
</section>
<section id="template">
	<div class="container">
		<div class="col-md-12">
			<div class="col-md-6" style="padding: 0px 40px;">
				<div class="wow fadeInLeft">
					<h2>Template</h2>
				</div>
				<p class="wow fadeInLeft">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.
				</p>
				<br>
				<div class="wow fadeInLeft">
					<a href="{{url('template')}}" class="btn-more">See Template</a>
				</div>
			</div>
			<div class="col-md-6 wow fadeInRight">
				<img src="{{asset('img/laptop2.svg')}}" width="500" class="img-responsive">
			</div>
		</div>
	</div>
</section>
<section id="contact">
	<div class="container">
		<div class="text-center wow bounceInDown">
			<a href="mailto:ilhamwara@gmail.com" class="btn-contact">Contact Me</a>
		</div>
	</div>
</section>
@include('include.footer')
@endsection

@section('js')
<script type="text/javascript">
	function loadmore(take, skip) {
		$.ajax({
			url 		: 'portfolio/loadmore/'+take+'/'+skip,
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
							'<a class="info" style="margin-right:5px;" href="{{url('portfolio/detail')}}/'+value.id+'">'+
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
	$('a[href*="#"]:not([href="#"])').click(function() {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				$('html, body').animate({
					scrollTop: target.offset().top
				}, 1000);
				return false;
			}
		}
	});
</script>
@endsection