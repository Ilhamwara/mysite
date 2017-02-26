@extends('layout.master')
@section('css')
@endsection
@section('content')
@include('include.topbar2')
<section class="template-section">
	<div class="col-md-12 header-title">
		<div class="container">
			<div class="wow fadeInDown">
				<h2>Add your project here!</h2>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="col-md-12 wow bounceInDown" style="padding: 40px 0px;">
			@include('include.alert')
			<div class="panel panel-default">
				<div class="panel-body">
					<h3>Form</h3>
					<br>
					<form class="form-horizontal" action="proses-tambah" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label class="col-sm-2 control-label">Title</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" placeholder="Title Site" name="nama" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Description</label>
							<div class="col-sm-10">
								<textarea class="form-control" name="deskripsi"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Type</label>
							<div class="col-sm-10">
								<select class="form-control" name="type" required>
									<option>-- Select Type --</option>
									<option value="Portfolio">Portfolio</option>
									<option value="Template">Template</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Price</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" min="0" name="harga">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Photo</label>
							<div class="col-sm-10">
								<input type="file" class="form-control" name="gambar" accept="image/*" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Photo Full</label>
							<div class="col-sm-10">
								<input type="file" class="form-control" name="gambar_full" accept="image/*" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Link Site</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="link" placeholder="http://" required>
							</div>
						</div>
						{!! csrf_field() !!}
						<div class="form-group">
							<div class="col-sm-10" style="float: right;">
								<button class="btn btn-demo btn-block">Save</button>
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
<script type="text/javascript" src="{{asset('js/tinymce/tinymce.min.js')}}"></script>
<script>tinymce.init({ selector:'textarea' });</script>
@endsection