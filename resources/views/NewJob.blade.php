@extends('layouts.app')
@section('title')
New Job Form
@endsection

@section('content')

    <form method='POST' action='/job/create' enctype='multipart/form-data'>

        <div class='form-group'>

            <label for="title">Title:</label>
            <input type='text' name='title' class='form-control'/>

            <label for="description">Description:</label>
            <textarea rows="5" type='textarea' name='description' class='form-control'/></textarea>

            <label for="contact_name">Contact Name:</label>
            <input name='contact_name' class='form-control'>

            <label for="address">Address:</label>
            <textarea rows="5" type='textarea' name='address' class='form-control'/></textarea>

            <label for="contact_number">Contact Number:</label>
            <input type='text' name='contact_number' class='form-control'/>

            <label for="img">Images:</label>
            <input type='file'  name='img' class='form-control'/>

            <br>

            <input type='submit' value='Finish Post' class='btn btn-default btn-success' />

            <input type='hidden' name='_token' value='<?php echo csrf_token(); ?>'/>


        </div>

    </form>

@endsection
