@extends('layouts.app')
@section('title')
Job Feed
@endsection

@section('content')

            {!! Form::model($job, ['method' => 'PATCH', 'route' => ['jobUpdate', $job->id]]) !!}

            <div class="form-group">
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('description', 'Description') !!}
                {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('contact_name', 'Contact Name') !!}
                {!! Form::text('contact_name', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('address', 'Address') !!}
                {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('contact_number', 'Contact Number') !!}
                {!! Form::text('contact_number', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('img', 'Next of Kin') !!}
                {!! Form::file('img', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
            {!! Form::submit('Update Job Details', ['class' => 'btn btn-success']) !!}
            </div>

            {!! Form::close() !!}




@endsection