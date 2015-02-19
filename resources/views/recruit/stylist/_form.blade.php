<div class="form">

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<ul>
	    @foreach($errors->all() as $error)
	        <li>{{{ $error }}}</li>
	    @endforeach
	</ul>

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
	</div> <!--end elements (basic)-->
	
	<h2 class="reveal">2. Other Info</h2>
	<div class="elements">
	
	<div class="row">
		{!! Form::label('current_emp', 'Current Employment') !!}
		{!! Form::select('current_emp') !!}
		{!! $errors->first('current_emp') !!}
	</div>
	
	<div class="row">
		{!! Form::label('current_emp_des', 'Current Employment Description') !!}
		{!! Form::select('current_emp_des') !!}
		{!! $errors->first('current_emp_des') !!}
	</div>
	
	<div class="row">
		{!! Form::label('school_qual', 'School Qualifications') !!}
		{!! Form::select('school_qual') !!}
		{!! $errors->first('school_qual') !!}
	</div>
	
	<div class="row">
		{!! Form::label('qual_non_hair', 'Any other Qualifications') !!}
		{!! Form::text('qual_non_hair') !!}
		{!! $errors->first('qual_non_hair') !!}
	</div>
	
	<div class="row">
		{!! Form::label('experience', 'Experience') !!}
		{!! Form::select('experience') !!}
		{!! $errors->first('experience') !!}
	</div>	
	
		<div class="row">
			<?php echo $form->labelEx($model,'current_position'); ?>
			<?php echo $form->dropDownList($model,'current_position', $model->getPositionOptions()); ?>
			<?php echo $form->error($model,'current_position'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model,'client_base'); ?>
			<?php echo $form->dropDownList($model,'client_base', $model->getClientbaseOptions()); ?>
			<?php echo $form->error($model,'client_base'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model,'qualifications'); ?>
			<?php echo $form->dropDownList($model,'qualifications', $model->getQualificationOptions()); ?>
			<?php echo $form->error($model,'qualifications'); ?>
		</div>
	
	<div id="adex">
	<p class="application">Please check the box if you have experience in the following areas:</p>
	<div class="adexBox">
		<?php echo $form->labelEx($model,'adex_stock'); ?>
		<?php echo $form->checkBox($model,'adex_stock'); ?>
		<?php echo $form->error($model,'adex_stock'); ?>
	</div>
	
	<div class="adexBox">
		<?php echo $form->labelEx($model,'adex_manage'); ?>
		<?php echo $form->checkBox($model,'adex_manage'); ?>
		<?php echo $form->error($model,'adex_manage'); ?>
	</div>
	
	<div class="adexBox">
		<?php echo $form->labelEx($model,'adex_train'); ?>
		<?php echo $form->checkBox($model,'adex_train'); ?>
		<?php echo $form->error($model,'adex_train'); ?>
	</div>
	
	<div class="adexBox">
		<?php echo $form->labelEx($model,'adex_reception'); ?>
		<?php echo $form->checkBox($model,'adex_reception'); ?>
		<?php echo $form->error($model,'adex_reception'); ?>
	</div>
	
	<div class="adexBox">
		<?php echo $form->labelEx($model,'adex_marketing'); ?>
		<?php echo $form->checkBox($model,'adex_marketing'); ?>
		<?php echo $form->error($model,'adex_marketing'); ?>
	</div>
	
	<div class="adexBox">
		<?php echo $form->labelEx($model,'adex_cservice'); ?>
		<?php echo $form->checkBox($model,'adex_cservice'); ?>
		<?php echo $form->error($model,'adex_cservice'); ?>
	</div>
	</div> <!--end adex-->
		
	</div> <!--end elements (other info)-->
	
	<h2 class="reveal">3. Hairdressing Skills</h2>
	<div class="elements">
	
	<p class="application">Please rate yourself from 1 (poor) to 5 (excellent) at the following:</p>

	<div class="row">
		<?php echo $form->labelEx($model,'cutting_skills'); ?>
		<?php echo $form->dropDownList($model,'cutting_skills', $model->getListOptions()); ?>
		<?php echo $form->error($model,'cutting_skills'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'colour_knowledge'); ?>
		<?php echo $form->dropDownList($model,'colour_knowledge', $model->getListOptions()); ?>
		<?php echo $form->error($model,'colour_knowledge'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'colour_skills'); ?>
		<?php echo $form->dropDownList($model,'colour_skills', $model->getListOptions()); ?>
		<?php echo $form->error($model,'colour_skills'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'men'); ?>
		<?php echo $form->dropDownList($model,'men', $model->getListOptions()); ?>
		<?php echo $form->error($model,'men'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'extensions_weave'); ?>
		<?php echo $form->dropDownList($model,'extensions_weave', $model->getListOptions()); ?>
		<?php echo $form->error($model,'extensions_weave'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'extensions_other'); ?>
		<?php echo $form->dropDownList($model,'extensions_other', $model->getListOptions()); ?>
		<?php echo $form->error($model,'extensions_other'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'chem_straighten'); ?>
		<?php echo $form->dropDownList($model,'chem_straighten', $model->getListOptions()); ?>
		<?php echo $form->error($model,'chem_straighten'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'braz_blow'); ?>
		<?php echo $form->dropDownList($model,'braz_blow', $model->getListOptions()); ?>
		<?php echo $form->error($model,'braz_blow'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hair_up'); ?>
		<?php echo $form->dropDownList($model,'hair_up', $model->getListOptions()); ?>
		<?php echo $form->error($model,'hair_up'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'awards'); ?>
		<?php echo $form->textArea($model,'awards',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'awards'); ?>
	</div>
	</div> <!--end hairdressing info-->
	
	<h2 class="reveal">4. About you</h2>
	<div class="elements">
	<div class="row">
		<?php echo $form->labelEx($model,'about_you'); ?>
		<?php echo $form->textArea($model,'about_you',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'about_you'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'why_hairdressing'); ?>
		<?php echo $form->textArea($model,'why_hairdressing',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'why_hairdressing'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'why_jakata'); ?>
		<?php echo $form->textArea($model,'why_jakata',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'why_jakata'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Send Your Application' : 'Save'); ?>
	</div>
	</div> <!--end element(hairdressing skills) -->
	
</div><!-- end accordion-->

<?php $this->endWidget(); ?>

</div><!-- form -->