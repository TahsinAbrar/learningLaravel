@extends('layout')

@section('content')
<h1>Contact</h1>
<p>Please contact us by sending a message using the form below:</p>

{{ HTML::ul($errors->all(),array('class'=>'errors')) }}

{{ Form::open(array('url'=> 'contact')) }}
{{ Form::label('Subject') }}
{{ Form::text('subject', 'Enter your subject') }}
<br/>
{{ Form::label('Message') }}
{{ Form::textarea('message','Enter your message') }}
<br/>
{{ Form::submit() }}
{{ Form::close() }}
@stop