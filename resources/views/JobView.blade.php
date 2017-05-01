@extends('layouts.app')
@section('title')
Job View
@endsection

@section('content')
	<div class="container">
		<div class="page-header">
		<h1>JOB SHEET<small>{{ $job->title }}</small></h1>

		</div>

		{{-- lEFT COLUMN --}}
		<div class="col-lg-6">
			<div class="panel panel-default panel-success">
				<div class="panel-heading">Job ID: {{ $job->id }} - Posted By: {{ $job->username }}
				<a href="{{route('editJob', ['id' => $job->id])}}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</div></a>
			  	<div class="panel-body">
			  	  	<ul class="list-group">
					    <li class="list-group-item">
					    {{ $job->contact_name }}
					    </li>
					    <li class="list-group-item">
					    {{ $job->contact_number }}
					    </li>
					    <li class="list-group-item">
					    {{ $job->address }}
					    </li>
				  	</ul>
			  	</div>
			</div>
		</div>

		{{-- RIGHT COLUMN --}}
		<div class="col-lg-6">
			<div class="thumbnail">
				<img src="{{ $job->img }}" alt="">
				<div class="caption">
					<h3>Description</h3>
					<p>{{ $job->description }}</p>
				</div>
			</div>
		</div>
		<a class="btn btn-danger" href="{{route('jobDelete', ['id' => $job->id])}}" >Delete Job</a>
	</div>

@endsection