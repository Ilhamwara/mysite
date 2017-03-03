@extends('layout.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('css/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/slick-theme.css')}}">
<style type="text/css">
	.medpar {
		margin: 0 auto;
		width: 100%;
		overflow: hidden;
	}
	.mplist{background: #fff;}
	.mplist > img {
		margin: auto;
	}
	.client-box > img{width: 150px!important; height: 60px; margin: 45px auto; background-color: #fff;}
</style>
@endsection

@section('content')
@include('include.topbar')
<section class="first-section" id="home">
	<div class="col-md-12 text-center">
		<div class="logo wow fadeInDown"><b>Imagination & Creativity</b></div>
		<h2 class="wow fadeInDown">Good design is a good business</h2>
		<p class="title-caption">
			Web design is performed by an IT professional who use computer programming language (HTML or JavaScript). The art of web designing is very difficult and it takes years of hard work to master it fully. To craft an aesthetically pleasing web resource with excellent usability a web designer needs to play around with code for quite a white, and finally come up with the perfect look by trial and error.
		</p>
		<br>
		<a href="#portfolio" class="gett-started">Getting Started</a>
	</div>	
</section>
<section id="about">
	<div class="container">
		<div class="col-md-12">
			<div class="col-md-6 wow fadeInLeft" style="color: #fff!important;">
				<h2>Hello and welcome to my page!</h2>
				<p style="color: #fff!important;">
					Each web design that we produce is one-of-a-kind. Every new client is guaranteed to leave satisfied and inspired. Every new design is a masterpiece that is specifically created to reveal your business atmosphere.
				</p>
			</div>
			<div class="col-md-6 wow fadeInRight">
				<img src="{{asset('img/ilham.png')}}" class="img-responsive img-circle text-right" width="170" style="padding-top:13px;margin: auto;">
			</div>
		</div>
	</div>
</section>
<section class="second-section" id="portfolio">
	<div class="container">
		<div class="col-md-12">
			<div class="title text-center wow fadeInDown">
				<h3>Powerfully responsive site</h3>
			</div>
		</div>
		<div class="col-md-12" id="containernya">
			<style type="text/css">
				.hovereffect > img::before, .hovereffect > img::after{box-sizing: inherit;}
			</style>
			@foreach($template as $data)
			<div class="col-md-4 col-sm-6">
				<div class="box-img-port hovereffect">
					<img src="{{asset('img/template/'.$data->gambar_full)}}" class="img-responsive img-fluid" style="vertical-align: middle!important;">
					<div class="overlay">
						<h2>{{$data->nama}}</h2>
						<a class="info" href="{{url('template/detail/'.$data->id)}}">Detail</a>
						<a class="info" href="{{$data->link}}" target="_blank">Demo</a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<div class="col-md-12 text-center wow bounceInDown">
			<br>
			<button class="btn-more" onclick="loadmore(4,6)" id="loadMore" style="border: none;">See More
			</button>
		</div>

	</div>
</section>
<section id="template">
	<div class="container">
		<div class="col-md-12">
			<div class="title text-center wow fadeInDown">
				<h3>Template</h3>
			</div>
		</div>
		<div class="col-md-12 box-template">
			<div class="col-md-6 text-center" style="padding: 50px ;">
				<div>
					<h3>
						Discover our templates
					</h3>
				</div>
				<p>
					Design is more than aesthetics. It’s more than creative concepts or graphical outputs. It's not just about the visual, it's about how something works.
				</p>
				<br><br>
				<div>
					<a href="{{url('template')}}" class="btn-more">See Template</a>
				</div>
			</div>
			<div class="col-md-6" style="padding: 0px;">
				<img src="{{asset('img/pict.jpg')}}" class="img-responsive" style="border-radius: 0px 5px 5px 0px!important;">
			</div>
		</div>
	</div>
</section>
<section class="third-section">
	<div class="container">
		<div class="text-center wow fadeInDown">
			<h1>Creative design is a money</h1>
		</div>
	</div>
</section>
<section class="fourth-section" id="service">
	<div class="container">
		<div class="col-md-4 text-center">
			<i class="fa fa-font-awesome fa-5x"></i>
			<h4>Fontawesome</h4>
			<p>
				Using fontawesome icon to make your website look more attractive.
			</p>
		</div>
		<div class="col-md-4 text-center">
			<i class="fa fa-google fa-5x"></i>
			<h4>Google Font</h4>
			<p>
				Font selection is good, the most important thing that affects your design template.
			</p>
		</div>
		<div class="col-md-4 text-center">
			<i class="fa fa-code fa-5x"></i>
			<h4>Code</h4>
			<p>
				Code is neat template allows you to develop this even easier
			</p>
		</div>
		<div class="col-md-4 text-center">
			<i class="fa fa-eyedropper fa-5x"></i>
			<h4>Color</h4>
			<p>
				Selection of the right color for your website content is very important, must be combined with the theme of your website
			</p>
		</div>
		<div class="col-md-4 text-center">
			<i class="fa fa-html5 fa-5x"></i>
			<h4>Responsive Design</h4>
			<p>
				Responsive display allows us to interact with apps, UI / UX highly in precedence in this case
			</p>
		</div>
		<div class="col-md-4 text-center">
			<i class="fa fa-lightbulb-o fa-5x"></i>
			<h4>Design Inspiration</h4>
			<p>
				Realize all your ideas with us. we will give you a good design for you.
			</p>
		</div>
	</div>
</section>
<section id="client">
	<div class="container">
		<div class="col-md-12">
			<div class="title text-left wow fadeInDown">
				<h3>Our partner</h3>
			</div>
		</div>
		<div class="medpar" style="height: 230px;">
			<div class="mplist client-box hovereffect">
				<img src="{{asset('img/logo/dentsmile.jpg')}}" class="img-responsive">
				<div class="overlay">
					<h2>Dentsmile</h2>
				</div>
			</div>
			<div class="mplist client-box hovereffect">
				<img src="{{asset('img/logo/ramani.jpg')}}" class="img-responsive" style="margin: 15px auto; height: 120px;">
				<div class="overlay">
					<h2>Ramani</h2>
				</div>
			</div>
			<div class="mplist client-box hovereffect">
				<img src="{{asset('img/logo/zanova.png')}}" class="img-responsive">
				<div class="overlay">
					<h2>Zanova</h2>
				</div>
			</div>
			<div class="mplist client-box hovereffect">
				<img src="{{asset('img/logo/mega.png')}}" class="img-responsive">
				<div class="overlay">
					<h2>Megaprimatama</h2>
				</div>
			</div>
			<div class="mplist client-box hovereffect">
				<img src="{{asset('img/logo/ojk.png')}}" class="img-responsive">
				<div class="overlay">
					<h2>Ojk</h2>
				</div>
			</div>
		</div>
	</div>
</section>
<style type="text/css">
	#contact{
		overflow: hidden;
		padding: 80px 0px;
		/*		background:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url('{{asset('img/contact.jpeg')}}');*/
/*		background-attachment: fixed;
		background-position: center;
		background-size: cover;*/
		/*background: #e0efe3;*/
		background: linear-gradient(#ffffff 50%, rgba(255,255,255,0) 0) 0 0,
		radial-gradient(circle closest-side, #FFFFFF 40%, rgba(255,255,255,0) 0) 0 0,
		radial-gradient(circle closest-side, #FFFFFF 80%, rgba(255,255,255,0) 0) 55px 0 #f4f4f4;
		background-size:110px 200px;
		background-repeat:repeat-x;
	}
</style>
<section id="contact">
	<div class="container">
		<div class="wow bounceInDown">
			<div class="panel panel-default" style="box-shadow: 0 5px 16px 0 rgba(0, 0, 0, 0.11)">
				<div class="panel-body" style="color: #666;">
					<div class="col-md-12">
						<h2>Get in touch!</h2>
						<p>
							We are here to answer any questions you may have about our company experiences. Reach out to us and we'll respond as soon as we can.
						</p>
						<p>
							Even if there is something you have always wanted to experience and can't find it on company, let us know and we promise we'll do our best to find it for you and send you there.
						</p>
					</div>
					<br>
					<form>
						<div class="col-md-6">
							<div class="form-group">
								<label>Name <sup class="text-danger">*</sup></label>
								<input type="text" class="form-control" placeholder="Your name" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Email <sup class="text-danger">*</sup></label>
								<input type="email" class="form-control" placeholder="Your email" required>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label>Message <sup class="text-danger">*</sup></label>
								<textarea class="form-control" rows="10" placeholder="Your messages here"></textarea>
							</div>
						</div>

						<style type="text/css">
							.btn-send{border:none; padding: 15px 20px; background:#3498db; color: #fff; font-weight: bold;}
							.form-control{background:#f4f4f4; border-radius: 0px; border:none; box-shadow: none;}
						</style>

						<div class="col-md-12">
							<div class="form-group">
								<button class="btn-send">Send</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
@include('include.footer')
@endsection

@section('js')
<script src="{{asset('js/slick.js')}}" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
	$(document).on('ready', function() {
		setTimeout( function(){
			$(".medpar").slick({
				infinite: true,
				slidesToShow: 4,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 2000,
				responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 3,
						infinite: true,
						dots: true
					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
				]
			});
		});
	});
</script>
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
							'<div class="col-md-6">'+
							'<div class="box-img-port hovereffect">'+
							'<img src="{{asset('img')}}/template/'+value.gambar+'" class="img-responsive">'+
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
					skip = skip + 4;
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