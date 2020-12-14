@extends('layouts.admin')
@section('content')
<div class="pull-left">
	<h2>Monitor Equipments</h2>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-right">
			<a class="btn btn-success" href="{{ route('log.create')}}">Monitor Equipment</a>
		</div>
	</div>
</div>

@if ($message = Session::get('success'))
	<div class="alert alert-succes">
		<p>{{$message}}</p>
	</div>

@endif

<table class="table table-bordered">
	<tr>
		<th>ID</th>
		<th>Borrower Name</th>
		<th>Equipment Name</th>
		<th>Datetime Borrowed</th>
        <th>Datetime Returned</th>
		<th width="280px">Action</th>
	</tr>
	@foreach ($logs as $log)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $log->studname }}</td>
		<td>{{ $log->course }}</td>
		<td>{{ $log->fee }}</td>
		<td>
			<form action="{{route('log.destroy', $log->logs_id)}}" method="POST">
				<a class="btn btn-info" href="{{route('log.show', $log->id)}}">See Summary</a>
				<a class="btn btn-primary" href="{{route('log.edit', $log->id)}}">Update</a>

				@csrf
				@method('DELETE')

				<button type="submit" class="btn btn-danger">Delete</button>
			</form>
		</td>
	</tr>
	@endforeach
</table>
