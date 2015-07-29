<div class="form">

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<ul>
	    @foreach($errors->all() as $error)
	        <li>{{{ $error }}}</li>
	    @endforeach
	</ul>
	
<div class="accordion">
	
	<h2 class="reveal">1. Contact Information</h2>
	
	{!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}
	
	<div class="elements">

	<div class="row">
		hidden field date
	</div>

	<div class="row">
		{!! Form::label('first_name', 'First Name') !!}
		{!! Form::text('first_name') !!}
		{!! $errors->first('first_name') !!}
	</div>
	
	<div class="row">
		{!! Form::label('second_name', 'Second Name') !!}
		{!! Form::text('second_name') !!}
		{!! $errors->first('second_name') !!}
	</div>

	<div class="row">
		{!! Form::label('age', 'Age') !!}
		{!! Form::text('age') !!}
		{!! $errors->first('age') !!}
	</div>

	<div class="row">
		{!! Form::label('address1', 'Address 1') !!}
		{!! Form::text('address1') !!}
		{!! $errors->first('address1') !!}
	</div>

	<div class="row">
		{!! Form::label('address2', 'Address 2') !!}
		{!! Form::text('address 2') !!}
		{!! $errors->first('address2') !!}
	</div>

	<div class="row">
		{!! Form::label('address3', 'Address 3') !!}
		{!! Form::text('address3') !!}
		{!! $errors->first('address3') !!}
	</div>

	<div class="row">
		{!! Form::label('postcode', 'Postcode') !!}
		{!! Form::text('postcode') !!}
		{!! $errors->first('postcode') !!}
	</div>

	<div class="row">
		{!! Form::label('email', 'Email') !!}
		{!! Form::text('email') !!}
		{!! $errors->first('email') !!}
	</div>

	<div class="row">
		{!! Form::label('phone', 'Phone') !!}
		{!! Form::text('phone') !!}
		{!! $errors->first('phone') !!}
	</div>

	<div class="row">
		{!! Form::label('mobile', 'Mobile') !!}
		{!! Form::text('mobile') !!}
		{!! $errors->first('mobile') !!}
	</div>
	
	</div> <!--end elements (basic info)-->
	
	<h2 class="reveal">2. Experience</h2>
	<div class="elements">
	
	<div class="row">
		{!! Form::label('current_position', 'Current Position') !!}
		{!! Form::select('current_position', [
			'0' => 'Please Choose',
			'1' => '1st Year Apprentice',
			'2' => '2nd Year Apprentice',
			'3' => 'Level 1 College',
			'4' => 'Level 2 College',
			'5' => 'School Link',
			'6' => 'Other']
		) !!}
		{!! $errors->first('current_position') !!}
	</div>

	<div class="row">
		{!! Form::label('in_salon', 'In Salon') !!}
		{!! Form::select('in_salon', [
			'0' => 'Please Choose',
			'1' => 'In Salon',
			'2' => 'Other Industry',
			'3' => 'Not Employed']
		) !!}
		{!! $errors->first('in_salon') !!}
	</div>

	<div class="row">
		{!! Form::label('salon_name', 'Salon Name') !!}
		{!! Form::text('in_salon') !!}
		{!! $errors->first('salon_name') !!}
	</div>

	
	<div class="row">
		{!! Form::label('qualification_hair', 'Hairdressing Qualifications') !!}
		{!! Form::select('qualification_hair', [
			'0' => 'Please Choose',
			'1' => 'Working towards NVQ1',
			'2' => 'Working Towards NVQ2',
			'3' => 'Working Towards NVQ3',
			'4' => 'Other']
		) !!}
		{!! $errors->first('qualification_hair') !!}
	</div>
	
	</div> <!--end elements (experience)-->
	
	<h2 class="reveal">3. Hairdressing Skills</h2>
	<div class="elements">
	
	<p class="application">Please rate your main interests from 1 (least) to 5 (most) for the following:</p>

	<div class="row">
		{!! Form::label('cutting', 'Cutting') !!}
		{!! Form::selectRange('cutting', 0, 5) !!}
		{!! $errors->first('cutting') !!}
	</div>
	
	<div class="row">
		{!! Form::label('styling', 'Styling') !!}
		{!! Form::selectRange('styling', 0, 5) !!}
		{!! $errors->first('styling') !!}
	</div>

	<div class="row">
		{!! Form::label('colouring', 'Colouring') !!}
		{!! Form::selectRange('colouring', 0, 5) !!}
		{!! $errors->first('colouring') !!}
	</div>
	
	<div class="row">
		{!! Form::label('men', 'Men') !!}
		{!! Form::selectRange('men', 0, 5) !!}
		{!! $errors->first('men') !!}
	</div>

	<div class="row">
		{!! Form::label('extensions', 'Extensions') !!}
		{!! Form::selectRange('extensions', 0, 5) !!}
		{!! $errors->first('extensions') !!}
	</div>

	<div class="row">
		{!! Form::label('chem_straightening', 'Chemical Straightening') !!}
		{!! Form::selectRange('chem_straightening', 0, 5) !!}
		{!! $errors->first('chem_straightening') !!}
	</div>

	<div class="row">
		{!! Form::label('brazil_blow', 'Brazilian Blowdry') !!}
		{!! Form::selectRange('brazil_blow', 0, 5) !!}
		{!! $errors->first('brazil_blow') !!}
	</div>

	<div class="row">
		{!! Form::label('hair_up', 'Hair Up') !!}
		{!! Form::selectRange('hair_up', 0, 5) !!}
		{!! $errors->first('hair_up') !!}
	</div>
	</div> <!--end elements (hairdressing skills)-->
	
	<h2 class="reveal">4. About you</h2>
	<div class="elements">
	
	<div class="row">
		{!! Form::label('about', 'About Yourself') !!}
		{!! Form::textarea('about') !!}
		{!! $errors->first('about') !!}
	</div>

	<div class="row">
		{!! Form::label('why_hairdressing', 'Why hairdressing?') !!}
		{!! Form::textarea('') !!}
		{!! $errors->first('why_hairdressing') !!}
	</div>

	<div class="row">
		{!! Form::label('why_jakata', 'Why Jakata?') !!}
		{!! Form::textarea('why_jakata') !!}
		{!! $errors->first('why_jakata') !!}
	</div>

	<div class="row buttons">
	{!! Form::submit('Send') !!}
	</div>
	</div> <!--end elements (about you)-->
</div><!-- end accordion-->

{!! Form::close() !!}

</div><!-- form -->