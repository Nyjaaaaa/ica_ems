@extends('layouts.admin')


@section('content')

<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<a class="btn btn-primary" href="{{ route('log.index')}}">Back</a>
		</div>
	</div>
</div>

@if ($errors->any())
	<div class="alert alert-danger">
		<strong>Whooops!</strong> There were some problems with your input.<br><br>

		<ul>
			@foreach ($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
	@endif

	<form action="{{route('log.store')}}" method="POST">
		@csrf

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Borrower Name:</strong>
					<input type="text" name="studname" class="form-control" placeholder="Borrower Name">
				</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Equipment Name:</strong>
					<input type="text" name="course" class="form-control" placeholder="Equipment Name">
				</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Datetime Barrowed:</strong>
					<input type="text" name="fee" class="form-control" placeholder="Datetime Barrowed">
				</div>
			</div>

            <div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Datetime Returned:</strong>
					<input type="text" name="fee" class="form-control" placeholder="Datetime Returned">
				</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Monitor</button>
			</div>
		</div>
	</form>
	@endsection
