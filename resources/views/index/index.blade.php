@extends('layout.master')

@section('css')
<style type="text/css">
body{color: #666;}
	.first-section{background: #fff; overflow: hidden; padding: 120px 0px;}
	/*.box-tengah{transform: translate(0,0);}*/
	.box-category{padding: 50px 0px;}
	.no-padding{padding: 0px;}
	.caption-title{width: 400px;}
</style>
@endsection

@section('content')
@include('include.topbar')
<section class="first-section">
	<div class="col-md-12">
		<div class="col-md-6 col-sm-12 col-xs-12 text-center box-tengah">
			<img src="{{asset('img/logo.svg')}}" width="350">
		</div>
		<div class="col-md-6 col-sm-12 col-xs-12">
			<h2 class="title">Discover new destination</h2>
			<p class="caption-title">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. 
			</p>
			<div class="box-category">
				<div class="col-md-4 col-sm-12 col-xs-12 text-center">
					<i class="fa fa-laptop fa-5x"></i>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.
					</p>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12 text-center" style="border-left:1px solid #eee; border-right:1px solid #eee; ">
					<i class="fa fa-laptop fa-5x"></i>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.
					</p>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12 text-center">
					<i class="fa fa-laptop fa-5x"></i>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.
					</p>
				</div>
			</div>
		</div>
	</div>	
</section>
@endsection

@section('js')
@endsection