@extends('layouts.app')

@section('content')

<h1> Welcome Celebrate Gannon Categories</h1>

	@foreach($departments as $department)

		<h2>{{ $department->name }}</h2>

	@endforeach


@endsection