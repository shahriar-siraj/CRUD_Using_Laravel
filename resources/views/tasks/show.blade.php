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
                            <div class="panel-heading">{{ $task->title }}</div>
                            <div class="panel-body">
                                {{ $task->body }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endsection
        </div>
    </body>
</html>
