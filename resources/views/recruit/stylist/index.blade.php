@extends('layouts.main')

@section('content')

<div id="recruitBlank">

<h1>Stylists</h1>

<div class="view">

	<b>Stylist ID:</b>
	{{ $id }}
	<br />
	
	<b>Date:</b>
	{{ $date }}
	<br />

	<b>First Name:</b>
	{{ $first_name }}
	<br />
	
	<b>Second Name:</b>
	{{ $last_name }}
	<br />
	
	<b>Age:</b>
	{{ $age }}
	<br />
	
	<b>Current Position:</b>
	{{ $current_position }}
	<br />

</div>


</div> <!--recruitBlank-->

@stop
