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
	
	<!--<h2 class="reveal">2. Experience</h2>
	<div class="elements">
	
	<div class="row">
		<?php echo $form->labelEx($model,'current_position'); ?>
		<?php echo $form->dropDownList($model,'current_position', $model->getPositionOptions()); ?>
		{{ $errors->first('') }},'current_position'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'in_salon'); ?>
		<?php echo $form->dropDownList($model,'in_salon', $model->getInSalonOptions()); ?>
		{{ $errors->first('') }},'in_salon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salon_name'); ?>
		<?php echo $form->textField($model,'salon_name',array('size'=>60,'maxlength'=>256)); ?>
		{{ $errors->first('') }},'salon_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qualification_school'); ?>
		<?php echo $form->dropDownList($model,'qualification_school', $model->getQualSchoolOptions()); ?>
		{{ $errors->first('') }},'qualification_school'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qualification_hair'); ?>
		<?php echo $form->dropDownList($model,'qualification_hair', $model->getQualHairOptions()); ?>
		{{ $errors->first('') }},'qualification_hair'); ?>
	</div>
	
	</div> <!- -end elements (experience)- -*>
	
	<h2 class="reveal">3. Hairdressing Skills</h2>
	<div class="elements">
	
	<p class="application">Please rate your main interests from 1 (least) to 5 (most) for the following:</p>

	<div class="row">
		<?php echo $form->labelEx($model,'cutting'); ?>
		<?php echo $form->dropDownList($model,'cutting', $model->getListOptions()); ?>
		{{ $errors->first('') }},'cutting'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'styling'); ?>
		<?php echo $form->dropDownList($model,'styling', $model->getListOptions()); ?>
		{{ $errors->first('') }},'styling'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'colouring'); ?>
		<?php echo $form->dropDownList($model,'colouring', $model->getListOptions()); ?>
		{{ $errors->first('') }},'colouring'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'men'); ?>
		<?php echo $form->dropDownList($model,'men', $model->getListOptions()); ?>
		{{ $errors->first('') }},'men'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'extensions'); ?>
		<?php echo $form->dropDownList($model,'extensions', $model->getListOptions()); ?>
		{{ $errors->first('') }},'extensions'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'chem_straightening'); ?>
		<?php echo $form->dropDownList($model,'chem_straightening', $model->getListOptions()); ?>
		{{ $errors->first('') }},'chem_straightening'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'brazil_blow'); ?>
		<?php echo $form->dropDownList($model,'brazil_blow', $model->getListOptions()); ?>
		{{ $errors->first('') }},'brazil_blow'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hair_up'); ?>
		<?php echo $form->dropDownList($model,'hair_up', $model->getListOptions()); ?>
		{{ $errors->first('') }},'hair_up'); ?>
	</div>
	</div> <!- -end elements (hairdressing skills)- -*>
	
	<h2 class="reveal">4. About you</h2>
	<div class="elements">
	
	<div class="row">
		<?php echo $form->labelEx($model,'about'); ?>
		<?php echo $form->textArea($model,'about',array('rows'=>6, 'cols'=>50)); ?>
		{{ $errors->first('') }},'about'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'why_hairdressing'); ?>
		<?php echo $form->textArea($model,'why_hairdressing',array('rows'=>6, 'cols'=>50)); ?>
		{{ $errors->first('') }},'why_hairdressing'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'why_jakata'); ?>
		<?php echo $form->textArea($model,'why_jakata',array('rows'=>6, 'cols'=>50)); ?>
		{{ $errors->first('') }},'why_jakata'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Send your application' : 'Save'); ?>
	</div>
	</div> <!- -end elements (about you)-->
</div><!-- end accordion-->

{!! Form::close() !!}

</div><!-- form -->