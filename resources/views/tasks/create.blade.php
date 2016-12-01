@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRUD Using Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/styles.css') }}">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @section('content')

            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">Create Task</div>
                            <div class="panel-body">
                                {!! Form::open(array('route'=>'task.store')) !!}
                                <div class="form-group">
                                    {!! Form::label('title', 'Enter Title') !!}
                                    {!! Form::text('title', null, ['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('body', 'Enter Body') !!}
                                    {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::button('Create',['type'=>'Submit', 'class'=>'btn btn-primary']) !!}
                                </div>
                                {!! Form::close() !!}
                            </div>

                            @if($errors->any())
                                <ul class='alert alert-danger'>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif

                        </div>

                    </div>
                </div>
            </div>

            @endsection
        </div>
    </body>
</html>
