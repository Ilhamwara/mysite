@if (session('success'))
<div id="alert" class="alert alert-success" role="alert">
	{{ session('error') }}
</div>
@endif
@if (session('error'))
<div id="alert" class="alert alert-danger" role="alert">
	{{ session('error') }}
</div>
@endif