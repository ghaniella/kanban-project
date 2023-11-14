<!DOCTYPE html>

<html lang="en">


<head>

<meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <link rel="stylesheet" href="{{ asset('style.css') }}">

  <title>TaskList</title>

</head>


<body>

    @extends('layouts.master')


@section('pageTitle', $pageTitle)


@section('main')

  <div class="task-list-container">

    <h1 class="task-list-heading">Task List</h1>

         ...

        <div class="table-body-progress">

          @switch($task->status)

            @case('in_progress')

              In Progress

              @break

            @case('in_review')

              Waiting/In Review

              @break

            @case('completed')

              Completed

              @break

            @default

              Not Started

          @endswitch

        </div>

        <!-- Ditambahkan -->

        <div>

          <a href="{{ route('tasks.edit', ['id' => $task->id]) }}">Edit</a>

        </div>

      </div>

    @endforeach

  </div>

@endsection
  
  </body>
  
</html>