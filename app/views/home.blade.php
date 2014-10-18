@extends('layout')
@section('content')
<section class="header section-padding">
    <div class="background">&nbsp;</div>
    <div class="container">
        <div class="header-text">
            <h1>Learning Laravel: The Easiest Way</h1>
            <p>
            Fastest way to learn developing web applications
            <br />
            using Laravel 4 framework!
            </p>
        </div>
    </div>
</section>

<div class="container">
    <section class="section-padding">
        <div class="jumbotron text-center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>
                        <span class="grey">Our</span> To-do List
                    </h1>
                </div>
            </div>
            @if($tasks->isEmpty())
            <p>Currently, there is no task!</p>
            @else
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Finish</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                    <tr>
                        <td>{{$task->id}}</td>
                        <td>{{$task->title}}</td>
                        <td>{{$task->body}}</td>
                        <td>{{$task->done ? 'Yes' : 'No' }}</td>
                        <td>
                            <a class="btn btn-info" href="{{URL::action('TasksController@edit',$task->id)}}">Edit</a>
                            <a class="btn btn-danger" href="{{URL::action('TasksController@delete',$task->id)}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </section>
</div>
@stop