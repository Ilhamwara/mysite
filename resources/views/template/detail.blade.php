@extends('layout.master')
@section('css')
@endsection
@section('content')
@include('include.topbar2')
<section class="template-section" style="padding: 100px 0px; overflow: hidden;">
	<div class="container">
		<div class="col-md-12">
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-body">

						<img src="{{asset('img/'.$data->gambar)}}" class="img-responsive">
						<div>
							<p>
								
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@include('include.footer')
@section('js')
@endsection
@endsection