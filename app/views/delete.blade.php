@extends('layout')
@section('content')
<section class="header section-padding">
    <div class="background">&nbsp;</div>
    <div class="container">
        <div class="header-text">
            <h1>Delete</h1>
            <p>Delete tasks page</p>
        </div>
    </div>
</section>
<div class="container">
    <section class="section-padding">
        <div class="jumbotron text-center">
            <h1>Do you want to really delete Task {{$task->id}} ?</h1>
            {{ Form::open(['url'=>'/delete', 'class'=>'form']) }}
            {{ Form::hidden('id',$task->id) }}
            <div class="form-group">
                {{ Form::submit('Delete Task',['class'=>'btn btn-danger']) }}
                <a class="btn btn-primary" href="{{URL::action('TasksController@home')}}"> No </a>
            </div>
            {{ Form::close() }}
        </div>
    </section>
</div>

@stop