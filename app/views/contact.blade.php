@extends('layout')

@section('content')
		<section class="header section-padding">
			<div class="background">&nbsp;</div>
			<div class="container">
				<div class="header-text">
					<h1>Contact Us</h1>
					<p>
					Feel free to contact us!
					</p>
				</div>
			</div>
		</section>

        <div class="container">
			<section class="section-padding">
				<div class="jumbotron text-center">
                    <h1>HAVE ANY QUESTIONS?</h1>
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
				</div>
			</section>
		</div>
@stop