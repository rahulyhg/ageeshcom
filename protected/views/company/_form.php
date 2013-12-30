<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'company-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'code'); ?>
		<?php echo $form->textField($model,'code',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'startDate'); ?>
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
		    'model' => $model,
			'value' => '',
		    'attribute' => 'startDate',
			'options' => array(
	        'dateFormat' => 'yy-mm-dd'),
		    'htmlOptions' => array(
		        'size' => '10',         // textField size
		        'maxlength' => '10',    // textField maxlength
		    ),
		));
				
		?>
		<?php echo $form->error($model,'startDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'endDate'); ?>
		<?php 
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
		    'model' => $model,
			'value'=> '',
		    'attribute' => 'endDate',
			'options' => array(
	        'dateFormat' => 'yy-mm-dd'),
		    'htmlOptions' => array(
		        'size' => '10',         // textField size
		        'maxlength' => '10',    // textField maxlength
		    ),
		));
		 ?>
		<?php echo $form->error($model,'endDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tin'); ?>
		<?php echo $form->textField($model,'tin',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'tin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'companyTelephone'); ?>
		<?php echo $form->textField($model,'companyTelephone',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'companyTelephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'executiveName'); ?>
		<?php echo $form->textField($model,'executiveName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'executiveName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'executivePhone'); ?>
		<?php echo $form->textField($model,'executivePhone',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'executivePhone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'statusDate'); ?>
		<?php 
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
		    'model' => $model,
		    'attribute' => 'statusDate',
			'options' => array(
	        'dateFormat' => 'yy-mm-dd'),
		    'htmlOptions' => array(
		        'size' => '10',         // textField size
		        'maxlength' => '10',    // textField maxlength
		    ),
		));
		?>
		<?php echo $form->error($model,'statusDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo ZHtml::enumDropDownList( $model,'status' ); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remarks'); ?>
		<?php echo $form->textArea($model,'remarks',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'remarks'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->