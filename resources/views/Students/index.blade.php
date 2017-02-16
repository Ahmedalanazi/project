@extends('layouts.app')

@section('content')

<h1> Welcome Celebrate Gannon Categories</h1>

	@foreach($students as $student)

		<h2>{{ $student->name }}</h2>

		<h3>{{ $student->universityId }}</h3>

	@endforeach

	 <?php
         echo Form::open(array('url' => '/files','files'=>'true'));
         echo 'Select the file to upload.';
         echo Form::file('image');
         echo Form::submit('Upload File');
         echo Form::close();
      ?>


@endsection