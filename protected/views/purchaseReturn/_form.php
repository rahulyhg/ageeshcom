<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'purchase-return-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'customerCode'); ?>
		<?php echo $form->textField($model,'customerCode',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'customerCode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'companyCode'); ?>
		<?php echo $form->textField($model,'companyCode',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'companyCode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'productCode'); ?>
		<?php echo $form->textField($model,'productCode',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'productCode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity'); ?>
		<?php echo $form->error($model,'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'returnType'); ?>
		<?php echo $form->textField($model,'returnType',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'returnType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entryDate'); ?>
		<?php echo $form->textField($model,'entryDate'); ?>
		<?php echo $form->error($model,'entryDate'); ?>
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