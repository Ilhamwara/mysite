@extends('layout.master')

@section('css')
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
					<img src="{{asset('img/template/'.$data->gambar)}}" class="img-responsive img-fluid" style="vertical-align: middle!important;">
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
			<div class="col-md-6" style="padding: 0px 40px;">
				<div class="wow fadeInLeft">
					<h2>Template</h2>
				</div>
				<p class="wow fadeInLeft">
					Select the template you want here, the best design will be our given here for your satisfaction.
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