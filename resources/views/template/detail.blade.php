@extends('layout.master')
@section('css')
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
		<div class="col-md-12" style="padding: 40px 0px;">
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-body">
						<img src="{{asset('img/template/'.$data->gambar_full)}}" class="img-responsive">
						<br><br>
						<div class="col-md-12">
							<h3>{{$data->nama}}</h3>
							<i>
								<small>
									<i class="fa fa-clock-o"></i> 
									{{date('d-M-y', strtotime($data->created_at))}}
								</small>
							</i>
							<div>
								{!!$data->deskripsi!!}
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<table class="table">
							<tr>
								<td>
									<img src="{{asset('img/ilham.png')}}" class="img-responsive img-circle" width="70">
								</td>
								<td>
									<b>Ilham Wara Nugroho</b>
									<small><i>Creator Design</i></small>
								</td>
							</tr>
						</table>
						<div>
							@if($data->harga > 0)
							<b>Rp {{str_replace(',','.',number_format($data->harga))}},00</b>
							@else
							@endif
						</div>
						<br>
						<div class="text-center">
							@if($data->harga > 0)
							<a href="" target="_blank" class="btn-purchase btn-block">Purchase</a>
							@endif
							<a href="{{$data->link}}" target="_blank" class="btn-demo btn-block">View Site</a>
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