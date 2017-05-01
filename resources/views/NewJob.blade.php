@extends('layouts.app')
@section('title')
New Job Form
@endsection

@section('content')
    <div class="container">
        
        <form method='POST' action='/job/create'>
            <div class='form-group'>

                <label for="title">Title:</label>
                <input type='text' name='title' class='form-control'/>

                <label for="description">Description:</label>
                <textarea type='textarea' name='description' class='form-control'/></textarea>

                <label for="contact_name">Contact Name:</label>
                <input name='contact_name' class='form-control'>

                <label for="address">Address:</label>
                <input type='textarea' name='address' class='form-control'/>

                <label for="contact_number">Contact Number:</label>
                <input type='text' name='contact_number' class='form-control'/>

                <label for="img">Images:</label>
                <input type='file' enctype='multipart/form-data' name='img' class='form-control'/>

                <br>

                <input type='submit' value='Finish Post' class='btn btn-default btn-success' />

                <input type='hidden' name='_token' value='<?php echo csrf_token(); ?>'/>

            </div>
        </form>

    </div>
@endsection
