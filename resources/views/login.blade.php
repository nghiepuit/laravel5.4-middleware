@extends('user_layout')
@section('content')



<div class="col-md-6 col-md-offset-3" style="margin-top: 100px; margin-bottom: 200px;">

	@if(session('message'))
		<div class="alert alert-warning">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>{{ session('message') }}</strong>
		</div>
	@endif

	<form method="POST" role="form">
		{{ csrf_field() }}
		<legend>Login</legend>

		<div class="form-group">
			<label for="">Email : </label>
			<input type="text" class="form-control" name="txtEmail">
		</div>

		<div class="form-group">
			<label for="">Password : </label>
			<input type="password" class="form-control" name="txtPassword">
		</div>

		<button type="submit" class="btn btn-primary">Login</button>
	</form>
</div>


@endsection