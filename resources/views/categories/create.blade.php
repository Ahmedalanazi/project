@extends('layouts.app')

@section('content')

<h1> write a new category </h1>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Categories</div>
                
                <div class="panel-body">
                   
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/categories') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Category Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                            </div>
                        </div>

                  

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    submit
                                </button>
                         
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- {!! Form::open(['url' => 'categories']) !!}

	<div class"form-group">
    
    {!! Form::label('name', 'Name:') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
	
	</div>

	<div class"form-group">
    
    {{!! Form::submit('Add Category', ['class' => 'btn btn-primery form-control']) !!}}
	
	</div>

    {!! Form::close() !!} -->

@endsection
