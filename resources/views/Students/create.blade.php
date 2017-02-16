@extends('layouts.app')

@section('content')

<h1> write a new category </h1>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Student</div>
                
                <div class="panel-body">
                   
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/students') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Student Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('universityId') ? ' has-error' : '' }}">
                            <label for="universityId" class="col-md-4 control-label">University ID</label>

                            <div class="col-md-6">
                                <input id="universityId" type="number" class="form-control" name="universityId" value="{{ old('universityId') }}" required autofocus>

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


@endsection
