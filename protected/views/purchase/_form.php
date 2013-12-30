<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'purchase-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'companyCode'); ?>
		<?php echo $form->textField($model,'companyCode',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'companyCode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'purchaseBillNumber'); ?>
		<?php echo $form->textField($model,'purchaseBillNumber',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'purchaseBillNumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discount'); ?>
		<?php echo $form->textField($model,'discount',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'discount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'billDate'); ?>
		<?php echo $form->textField($model,'billDate'); ?>
		<?php echo $form->error($model,'billDate'); ?>
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