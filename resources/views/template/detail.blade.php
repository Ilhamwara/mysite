@extends('layout.master')
@section('css')
<style type="text/css">
	.header-title{
		background: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url('{{asset('img/books.jpg')}}')!important;
		background-size: cover!important; 
		background-repeat: no-repeat!important;
		background-position: top center!important;
		background-attachment: fixed!important;
		text-align: center;
		padding-top: 70px;
		padding-bottom: 100px;
		color: #fff;
	}
	.header-title h2{
		font-size: 40px; 
		color: #fff; 
	}
	a{
		color: #fff;
	}
	a:hover{
		color: #fff;
	}
</style>
@endsection
@section('content')
<section class="template-section">
	<div class="col-md-12 header-title">
		<div class="container">
			<div class="wow fadeInDown">
				<h2>"Creativity is just connecting things"</h2>
				<small><b>-Steve Jobs</b></small>
				<p>
					<a href="{{url('/')}}" class="text-default">Home</a> / <a href="{{url('template')}}" class="text-default">Template</a> / <span class="text-default">{{$data->nama}}</span>
				</p>
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
							<a href="" data-toggle="modal" data-target="#myModal" class="btn-purchase btn-block">Purchase</a>
							@endif
							<a href="{{$data->link}}" target="_blank" class="btn-demo btn-block">View Site</a>
						</div>
					</div>
				</div>
			</div>

			@if($data->harga > 0)
			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content" style="overflow: hidden;">
						<div class="modal-body">
							<h2>Order template {{$data->nama}}</h2>
							<br>
							<form>
								<div class="form-group row">
									<label class="col-md-4 col-form-label">
										Nama <sup class="text-danger">*</sup>
									</label>
									<div class="col-md-8">
										<input class="form-control" type="text" placeholder="Nama" name="nama">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4 col-form-label">
										Email <sup class="text-danger">*</sup>
									</label>
									<div class="col-md-8">
										<input class="form-control" type="email" placeholder="Email" name="email">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4 col-form-label">
										Telephone <sup class="text-danger">*</sup>
									</label>
									<div class="col-md-8">
										<input class="form-control" type="text" placeholder="Telephone" name="nama">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4 col-form-label">
										Nama Rekening Pengirim <sup class="text-danger">*</sup>
									</label>
									<div class="col-md-8">
										<input class="form-control" type="text" placeholder="Nama rekening pengirim" name="nama">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4 col-form-label">
										Pilih Rekening Bank <sup class="text-danger">*</sup>
									</label>
									<div class="col-md-8">
										<select class="form-control" name="bank">
											<option>-- Pilih Rekening Bank --</option>
											<option value="cimb">CIMB NIAGA ( 703136663400 ) / an. Ilham Wara Nugroho</option>
											<option value="bca">CIMB BCA ( 1651912704 ) / an. Anita Rachman</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4 col-form-label">
										Upload bukti pembayaran <sup class="text-danger">*</sup>
									</label>
									<div class="col-md-8">
										<input class="form-control" type="file" name="file">
									</div>
								</div>
								<br>
								<div class="form-group row">
									<div class="col-md-12 text-center">
										<a href="" class="btn-send btn-block">Send order</a>
									</div>
								</div>
							</form>
							<small>
								<i>Keterangan : 
									<br> - upload menggunakan data diri anda yang benar karena file template yang anda pesan akan kami kirimkan lewat email anda. Terimakasih
									<br> - Tunggu konfirmasi dari kami setelah melakukan order 1x24 jam.
									<br> - Konfirmasi akan kami kirimkan via sms.
								</i>
							</small>
						</div>
					</div>
				</div>
			</div>
			@endif
			
			<div class="col-md-2 text-center">
				<div class="panel panel-default" style="background:#85C1E9; color: #fff;">
					<div class="panel-body">
						<div class="col-md-6" style="padding:0px;margin: 0px 25px;">
							<i class="fa fa-download fa-2x"></i> <br>20
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-2 text-center">
				<div class="panel panel-default" style="background:#F7DC6F; color: #fff;">
					<div class="panel-body text-center">
						<div class="col-md-6" style="padding:0px;margin: 0px 25px;">
							<i class="fa fa-eye fa-2x"></i> <br>20
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