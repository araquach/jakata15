@extends('layouts.main')

@section('content')

<script type="text/javascript">
window.addEvent('domready', function(){
	  
	  var myAccordion = new Fx.Accordion($$('.reveal'), $$('.elements'), {
	      display: 0,
	      alwaysHide: true
	  });
	  
});
</script>

<div id="application">
@if(Session::has('message'))
	<div class="applicationSuccess">
	{{{ Session::get('message') }}}
	</div>
@endif

<div id="application-form">
<h1>Join the team: Stylist Position</h1>
<p>LINK TO APPRENTICE</p>
<p>Please complete ALL sections of the form before submitting your application.</p>
<p>We will contact you as soon as a position becomes available.</p>

@include('recruit.stylist._form')

</div> 
</div> 

@stop