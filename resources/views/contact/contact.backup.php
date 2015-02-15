@extends('layouts.main')

@section('content')

<section id= "contact">

{{-- flash message success/error --}}

<div id="formWrap">

<h1>Contact Us</h1>

<p>Please fill in as much information as possible in the form below. If you wish to make an appointment state the preferred date and time plus the service you require</p>

<div id="form" class="form">

{{ Form::open(array('url'=>'contact/form', 'id'=>'contact-form')) }}

	<div class="row">
	{{ Form::label('first_name', 'First Name') }}
	{{ Form::text('first_name') }}
	</div>
	
	<div class="row">
	{{ Form::label('second_name', 'Second Name') }}
	{{ Form::text('second_name') }}
	</div>
	
	<div class="row">
	{{ Form::label('email', 'Email Address') }}
	{{ Form::email('email') }}
	</div>
	
	<div class="row">
	{{ Form::label('mobile', 'Contact Number') }}
	{{ Form::text('mobile') }}
	</div>
	
	<div class="row">
	{{ Form::label('body', 'Your Message') }}
	{{ Form::textarea('body') }}
	</div>
	
	{{ Form::submit('Save') }}
	
{{ Form::close() }}

</div><!-- form -->
</div><!-- formWrap -->

</section> <!--end contact-->

@stop