@extends('layout.master')

@section('css')
<style type="text/css">
	body{color: #666; font-family: 'Bitter',serif;}
	p{font-size: 14px; padding: 10px 0px;}
	a:hover{text-decoration: none;}
	.first-section{
		background:    
		linear-gradient(
			rgba(0, 0, 0, 1), 
			rgba(0, 0, 0, 0.9)
			),url('{{asset('img/header.jpg')}}');
		height: 630px;
		background-repeat: no-repeat;
		background-position: center;
		overflow: hidden;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		padding: 150px 0px;
	}
	.title-caption{width: 700px; margin: 30px auto; color: #fff; font-size: 16px; letter-spacing: 0.5px;}
	.gett-started{background:#e53935; color: #fff; padding: 15px; border-radius:3px; font-weight: bold;}
	.gett-started:hover{color: #fff; text-decoration: none;}
	.second-section{overflow: hidden; padding: 80px 0px;}
	.title > h3{font-size: 45px; padding-bottom: 30px; margin: 0px;}
	.title > h3::before{border-bottom: 2px solid #666;}
	.third-section{background:#f4f4f4; overflow: hidden; padding: 80px 0px;}
	.btn-more{margin:10px 0px;background:#2ecc71; color: #fff; padding: 15px; border-radius:3px; font-weight: bold;}
	.btn-more:hover{text-decoration: none;color: #fff;}
	.fourth-section{overflow: hidden; padding: 80px 0px;}
	.box-img-port{margin-bottom: 20px;}
	.fifth-section{overflow: hidden; background:#f4f4f4; padding: 60px 0px;}
	.sixth-section{overflow: hidden; background:#333; padding: 40px 0px; color: #fff;}
	.btn-primary-own{background: #2ecc71; color: #fff; padding: 15px 20px; font-weight: bold; border-radius: 3px; margin: 0px 5px;}
	.box-skill{margin:20px 0px;border: 3px dashed #e0e0e0; padding: 20px; display: block; border-radius: 3px; transition: .3s all;}
	.box-skill > img{width: 100px; height: 100px;}
	.box-skill:hover{border: 3px dashed #e74c3c;}
	.sosmed{list-style: none; padding:0px; margin: 20px 0px;}
	.sosmed > li{
		display: inline-block; 
		margin: 0px 7px; 
		width: 40px;
		height: 40px;
		background: #fff;
		border-radius: 5em;
		opacity: .7;
		transition: .3s all;
	}
	.sosmed > li:hover{opacity: 1;}
	.sosmed > li > a{ font-size: 20px; line-height: 2em; color: rgba(26,26,26,.7);}
</style>
@endsection

@section('content')
@include('include.topbar')
<section class="first-section">
	<div class="col-md-12 text-center">
		<img src="{{asset('img/logo-white.svg')}}" style="width: 300px;" class="wow fadeInDown">
		<p class="title-caption">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.
		</p>
		<br>
		<a href="" class="gett-started">Getting Started</a>
	</div>	
</section>
<section class="second-section">
	<div class="col-md-12">
		<div class="title text-center wow fadeInDown">
			<h3>Who we are?</h3>
		</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-6 text-center">
			<img src="{{asset('img/about.jpg')}}" width="600" class="img-responsive">
		</div>
		<div class="col-md-6">
			<div class="wow fadeInRight">
				<h3>Powerfull Simple Project <br> Management</h3>
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
</section>
<section class="third-section">
	<div class="col-md-12">
		<div class="title text-center wow fadeInDown">
			<h3>Service</h3>
		</div>
	</div>
	<div class="col-md-12 wow fadeInDown" style="margin: 30px 12%;">
		<div class="col-md-3 text-center">
			<i class="fa fa-laptop fa-5x"></i>
			<h4>Website</h4>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.
			</p>
		</div>
		<div class="col-md-3 text-center">
			<i class="fa fa-mobile-phone fa-5x"></i>
			<h4>Android</h4>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.
			</p>
		</div>
		<div class="col-md-3 text-center">
			<i class="fa fa-apple fa-5x"></i>
			<h4>IOS</h4>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.
			</p>
		</div>
	</div>
</section>
<section class="fourth-section">
	<div class="col-md-12">
		<div class="title text-center wow fadeInDown">
			<h3>Portfolio</h3>
		</div>
	</div>
	<style type="text/css">
		.hovereffect {
			width: 100%;
			height: 100%;
			float: left;
			overflow: hidden;
			position: relative;
			text-align: center;
			cursor: default;
		}

		.hovereffect .overlay {
			width: 100%;
			height: 100%;
			position: absolute;
			overflow: hidden;
			top: 0;
			left: 0;
			background-color: rgba(0,0,0,0.6);
			opacity: 0;
			filter: alpha(opacity=0);
			-webkit-transform: translate(460px, -100px) rotate(180deg);
			-ms-transform: translate(460px, -100px) rotate(180deg);
			transform: translate(460px, -100px) rotate(180deg);
			-webkit-transition: all 0.2s 0.4s ease-in-out;
			transition: all 0.2s 0.4s ease-in-out;
		}

		.hovereffect img {
			display: block;
			position: relative;
			-webkit-transition: all 0.2s ease-in;
			transition: all 0.2s ease-in;
		}

		.hovereffect h2 {
			text-transform: uppercase;
			color: #fff;
			text-align: center;
			position: relative;
			font-size: 17px;
			padding: 10px;
			background: rgba(0, 0, 0, 0.6);
		}

		.hovereffect a.info {
			display: inline-block;
			text-decoration: none;
			padding: 7px 14px;
			text-transform: uppercase;
			color: #fff;
			border: 1px solid #fff;
			margin: 50px 0 0 0;
			background-color: transparent;
			-webkit-transform: translateY(-200px);
			-ms-transform: translateY(-200px);
			transform: translateY(-200px);
			-webkit-transition: all 0.2s ease-in-out;
			transition: all 0.2s ease-in-out;
		}

		.hovereffect a.info:hover {
			box-shadow: 0 0 5px #fff;
		}

		.hovereffect:hover .overlay {
			opacity: 1;
			filter: alpha(opacity=100);
			-webkit-transition-delay: 0s;
			transition-delay: 0s;
			-webkit-transform: translate(0px, 0px);
			-ms-transform: translate(0px, 0px);
			transform: translate(0px, 0px);
		}

		.hovereffect:hover h2 {
			-webkit-transform: translateY(0px);
			-ms-transform: translateY(0px);
			transform: translateY(0px);
			-webkit-transition-delay: 0.5s;
			transition-delay: 0.5s;
		}

		.hovereffect:hover a.info {
			-webkit-transform: translateY(0px);
			-ms-transform: translateY(0px);
			transform: translateY(0px);
			-webkit-transition-delay: 0.3s;
			transition-delay: 0.3s;
		}
		Close

	</style>
	<div class="col-md-12">
		<div class="col-md-3">
			<div class="box-img-port hovereffect">
				<img src="{{asset('img/pict.jpg')}}" width="300">
				<div class="overlay">
					<h2>Judul</h2>
					<a class="info" href="#"><i class="fa fa-zoom"></i></a>
					<a class="info" href="#">link here</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="box-img-port hovereffect">
				<img src="{{asset('img/pict.jpg')}}" width="300">
				<div class="overlay">
					<h2>Judul</h2>
					<a class="info" href="#">link here</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="box-img-port hovereffect">
				<img src="{{asset('img/pict.jpg')}}" width="300">
				<div class="overlay">
					<h2>Judul</h2>
					<a class="info" href="#">link here</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="box-img-port hovereffect">
				<img src="{{asset('img/pict.jpg')}}" width="300">
				<div class="overlay">
					<h2>Judul</h2>
					<a class="info" href="#">link here</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="box-img-port hovereffect">
				<img src="{{asset('img/pict.jpg')}}" width="300">
				<div class="overlay">
					<h2>Judul</h2>
					<a class="info" href="#">link here</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="box-img-port hovereffect">
				<img src="{{asset('img/pict.jpg')}}" width="300">
				<div class="overlay">
					<h2>Judul</h2>
					<a class="info" href="#">link here</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="box-img-port hovereffect">
				<img src="{{asset('img/pict.jpg')}}" width="300">
				<div class="overlay">
					<h2>Judul</h2>
					<a class="info" href="#">link here</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="box-img-port hovereffect">
				<img src="{{asset('img/pict.jpg')}}" width="300">
				<div class="overlay">
					<h2>Judul</h2>
					<a class="info" href="#">link here</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12 text-center wow fadeInDown">
		<br>
		<a href="" class="btn-more">See More</a>
	</div>
</div>
</section>
<!-- <section class="fifth-section">
	<div class="col-md-12 wow fadeInDown">
		<div class="title text-center">
			<h3>Skill</h3>
		</div>
	</div>
	<div class="col-md-12 wow fadeInDown">
		<div class="col-md-3 text-center">
			<div class="box-skill">
				<img src="{{asset('img/html5.svg')}}">
				<h1>100%</h1>
			</div>
		</div>
		<div class="col-md-3 text-center">
			<div class="box-skill" id="shiva">
				<img src="{{asset('img/CSS3.svg')}}">
				<h1 class="count">90%</h1>
			</div>
		</div>
		<div class="col-md-3 text-center">
			<div class="box-skill">
				<img src="{{asset('img/Javascript.svg')}}">
				<h1>60%</h1>
			</div>
		</div>
		<div class="col-md-3 text-center">
			<div class="box-skill">
				<img src="{{asset('img/laravel.png')}}">
				<h1>80%</h1>
			</div>
		</div>
		<div class="col-md-3 text-center">
			<div class="box-skill">
				<img src="{{asset('img/php.png')}}">
				<h1>85%</h1>
			</div>
		</div>
		<div class="col-md-3 text-center">
			<div class="box-skill">
				<img src="{{asset('img/nodejs.png')}}">
				<h1>0%</h1>
			</div>
		</div>
		<div class="col-md-3 text-center">
			<div class="box-skill">
				<img src="{{asset('img/android.png')}}">
				<h1>30%</h1>
			</div>
		</div>
	</div>
</section> -->

<style type="text/css">
	.footer-section{overflow: hidden; padding: 40px 0px; background: #1f1f1f; color: #aaa;}
</style>
<section class="footer-section">
	<div class="col-md-12 text-center">
		<ul class="sosmed wow bounceInDown">
			<li>
				<a href="https://www.facebook.com/ilhamwaranugroho" target="_blank">
					<i class="fa fa-facebook"></i>
				</a>
			</li>
			<li>
				<a href="https://www.instagram.com/ilhamwara/?hl=en" target="_blank">
					<i class="fa fa-instagram"></i>
				</a>
			</li>
			<li>
				<a href="https://twitter.com/Ilhamwara" target="_blank">
					<i class="fa fa-twitter"></i>
				</a>
			</li>
			<li>
				<a href="https://www.linkedin.com/in/ilham-wara-nugroho-s-kom-a2951a118/" target="_blank">
					<i class="fa fa-linkedin"></i>
				</a>
			</li>
		</ul>
	</div>
	<div class="col-md-12 text-center">
		<h5>Jl Madukara Halim, Jakarta</h5>
		<h5>+62-813-1645-3130 / Whatsapp</h5>
		<h5>Develop by Ilham Wara Nugroho - <?php echo date('Y'); ?></h5>
	</div>
</section>
@endsection

@section('js')

@endsection