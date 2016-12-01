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

                        @if(Session::has('message'))
                            <div class="alert alert-success">
                                {{ Session::get('message') }}
                            </div>
                        @endif
                        <div class="panel panel-default">
                            <div class="panel-heading">Tasks</div>
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <th>Title</th>
                                        <th>Action</th>
                                    </tr>
                                 
                                    @foreach($tasks as $task)
                                    <tr>
                                        <td>{{ link_to_route('task.show',$task->title, [$task->id]) }}</td>
                                        <td>
                                            {!! Form::open(array('route'=>['task.destroy',$task->id],'method'=>'DELETE')) !!}
                                                {{ link_to_route('task.edit','Edit', [$task->id], ['class'=>'btn btn-primary']) }}
                                                
                                                {!! Form::button('Delete',['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                                            {!! Form::close() !!}
                                            </td>
                                    </tr>
                                @endforeach
                                </table>
                            </div>
                        </div>

                        {{ link_to_route('task.create','Add new task', null, ['class'=>'btn btn-success']) }}


                    </div>
                </div>
            </div>

            @endsection
        </div>
    </body>
</html>
