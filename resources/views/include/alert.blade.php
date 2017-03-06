@if (session('success'))
<div id="alert" class="alert alert-success" role="alert" style="overflow: hidden;">
	{{ session('success') }}
</div>
@endif
@if (session('error'))
<div id="alert" class="alert alert-danger" role="alert" style="overflow: hidden;">
	{{ session('error') }}
</div>
@endif