@extends('layouts.app')
@section('title')
Job Feed
@endsection

@section('content')

		<div class="page-header">
		<h1>JOB Feed<small></small></h1>
		</div>

	    <table class="table table-bordered">
		    <thead>
				<tr style="background-color: #dff0d8; !important" ">
					<th>Job ID</th>
					<th>Title</th>
					<th>Contact Name</th>
					<th>Address</th>
				</tr>
		    </thead>

		    <tbody>
			    @foreach ($job as $job)

			      <tr>
			        <td>{{ $job->id }}</td>
			        <td><a href="{{route('selectJob', ['id' => $job->id])}}">{{ $job->title }}</a></td>
			        <td>{{ $job->contact_name }}</td>
			        <td>{{ $job->address }}</td>
			      </tr>

			    @endforeach

		    </tbody>
		</table>
  @endsection
