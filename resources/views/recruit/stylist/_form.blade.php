<div class="form">

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<ul>
	    @foreach($errors->all() as $error)
	        <li>{{{ $error }}}</li>
	    @endforeach
	</ul>
	
{{ Form::open() }}	

<div class="accordion">
	
	<h2 class="reveal">1. Contact Information</h2>
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
	
	</div> <!--end elements (basic)-->
	
	<h2 class="reveal">2. Other Info</h2>
	<div class="elements">
	
	<div class="row">
		{!! Form::label('current_emp', 'Current Employment') !!}
		{!! Form::select('current_emp', [
			'0' => 'Please Choose',
			'1' => 'In hairdressing role',
			'2' => 'In non-hairdressing role',
			'3' => 'Unemployed']
		) !!}
		{!! $errors->first('current_emp') !!}
	</div>
	
	<div class="row">
		{!! Form::label('current_emp_des', 'Current Employment Description') !!}
		{!! Form::text('current_emp_des') !!}
		{!! $errors->first('current_emp_des') !!}
	</div>
	
	<div class="row">
		{!! Form::label('school_qual', 'School Qualifications') !!}
		{!! Form::select('school_qual', [
			'0' => 'Please Select',
			'1' => 'Up to 4 GCSE\'s',
			'2' => '4 or more GCSE\'s',
			'3' => '1 or more A level\'s',
			'4' => 'Other']
		) !!}
		{!! $errors->first('school_qual') !!}
	</div>
	
	<div class="row">
		{!! Form::label('qual_non_hair', 'Any other Qualifications') !!}
		{!! Form::text('qual_non_hair') !!}
		{!! $errors->first('qual_non_hair') !!}
	</div>
	
	<div class="row">
		{!! Form::label('experience', 'Experience') !!}
		{!! Form::select('experience', [
			'0' => 'Please Select',
			'1' => 'None',
			'2' => 'Up to 12 months',
			'3' => '1 to 2 years',
			'4' => '2 to 4 years',
			'5' => '4 to 8 years',
			'6' => '8 to 10 years',
			'7' => '10 plus years']
		) !!}
		{!! $errors->first('experience') !!}
	</div>	
	
	<div class="row">
		{!! Form::label('current_position', 'Current Position') !!}
		{!! Form::select('current_position', [
			'0' => 'Please Select',
			'1' => 'Junior Stylist',
			'2' => 'Graduate Stylist',
			'3' => 'Senior Stylist',
			'4' => 'Director']
		) !!}
		{!! $errors->first('current_position') !!}
	</div>	
	
	<div class="row">
		{!! Form::label('client_base', 'Client Base') !!}
		{!! Form::select('client_base', [
			'0' => 'Please Select',
			'1' => 'Yes - Local',
			'2' => 'Yes - Other area',
			'3' => 'No']
		) !!}
		{!! $errors->first('client_base') !!}
	</div>	
	
	<div class="row">
		{!! Form::label('qualifications', 'Qualifications') !!}
		{!! Form::select('qualifications', [
			'0' => 'Please Select',
			'1' => 'NVQ Level 1',
			'2' => 'NVQ Level 2',
			'3' => 'NVQ Level 3',
			'4' => 'Other']
		) !!}
		{!! $errors->first('qualifications') !!}
	</div>
	
	<div id="adex">
	<p class="application">Please check the box if you have experience in the following areas:</p>
	
	<div class="adexBox">
		{!! Form::label('adex_stock', 'Stock Control') !!}
		{!! Form::checkbox('adex_stock') !!}
		{!! $errors->first('adex_stock') !!}
	</div>
	
	<div class="adexBox">
		{!! Form::label('adex_manage', 'Management') !!}
		{!! Form::checkbox('adex_manage') !!}
		{!! $errors->first('adex_manage') !!}
	</div>
	
	<div class="adexBox">
		{!! Form::label('adex_train', 'Training') !!}
		{!! Form::checkbox('adex_train') !!}
		{!! $errors->first('adex_train') !!}
	</div>
	
	<div class="adexBox">
		{!! Form::label('adex_reception', 'Reception') !!}
		{!! Form::checkbox('adex_reception') !!}
		{!! $errors->first('adex_reception') !!}
	</div>
	
	<div class="adexBox">
		{!! Form::label('adex_marketing', 'Marketing') !!}
		{!! Form::checkbox('adex_marketing') !!}
		{!! $errors->first('adex_marketing') !!}
	</div>
	
	<div class="adexBox">
		{!! Form::label('adex_cservice', 'Customer Service') !!}
		{!! Form::checkbox('adex_cservice') !!}
		{!! $errors->first('adex_cservice') !!}
	</div>
	</div> <!--end adex-->
		
	</div> <!--end elements (other info)-->
	
	<h2 class="reveal">3. Hairdressing Skills</h2>
	<div class="elements">
	
	<p class="application">Please rate yourself from 1 (poor) to 5 (excellent) at the following:</p>

	<div class="row">
		{!! Form::label('cutting_skills', 'Cutting Skills') !!}
		{!! Form::selectRange('cutting_skills', 0, 5) !!}
		{!! $errors->first('cutting_skills') !!}
	</div>

	<div class="row">
		{!! Form::label('colour_knowledge', 'Colour Knowledge') !!}
		{!! Form::selectRange('colour_knowledge', 0, 5) !!}
		{!! $errors->first('colour_knowledge') !!}
	</div>

	<div class="row">
		{!! Form::label('colour_skills', 'Colouring Skills') !!}
		{!! Form::selectRange('colour_skills', 0, 5) !!}
		{!! $errors->first('colour_skills') !!}
	</div>
	
	<div class="row">
		{!! Form::label('men', 'Mens Hairdressing') !!}
		{!! Form::selectRange('men', 0, 5) !!}
		{!! $errors->first('men') !!}
	</div>

	<div class="row">
		{!! Form::label('extensions_weave', 'Extensions (weave)') !!}
		{!! Form::selectRange('extensions_weave', 0, 5) !!}
		{!! $errors->first('extensions_weave') !!}
	</div>

	<div class="row">
		{!! Form::label('extensions_other', 'Extensions (other)') !!}
		{!! Form::selectRange('extensions_other', 0, 5) !!}
		{!! $errors->first('extensions_other') !!}
	</div>

	<div class="row">
		{!! Form::label('chem_straighten', 'Chemical Straightening') !!}
		{!! Form::selectRange('chem_straighten', 0, 5) !!}
		{!! $errors->first('chem_straighten') !!}
	</div>

	<div class="row">
		{!! Form::label('braz_blow', 'Brazilian Blowdry') !!}
		{!! Form::selectRange('braz_blow', 0, 5) !!}
		{!! $errors->first('braz_blow') !!}
	</div>

	<div class="row">
		{!! Form::label('hair_up', 'Hair Up') !!}
		{!! Form::selectRange('hair_up', 0, 5) !!}
		{!! $errors->first('hair_up') !!}
	</div>

	<div class="row">
		{!! Form::label('awards', 'Hairdressing Awards') !!}
		{!! Form::text('awards') !!}
		{!! $errors->first('awards') !!}
	</div>
	</div> <!--end hairdressing info-->
	
	<h2 class="reveal">4. About you</h2>
	<div class="elements">
	<div class="row">
		{!! Form::label('about_you', 'About You') !!}
		{!! Form::textarea('about_you') !!}
		{!! $errors->first('about_you') !!}
	</div>

	<div class="row">
		{!! Form::label('why_hairdressing', 'Why Hairdressing?') !!}
		{!! Form::textarea('why_hairdressing') !!}
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
	</div> <!--end element(hairdressing skills) -->
	
</div><!-- end accordion-->

{{ Form::close() }}

</div><!-- form -->