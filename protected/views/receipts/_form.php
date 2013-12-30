<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'receipts-form',
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
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'billNo'); ?>
		<?php echo $form->textField($model,'billNo',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'billNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paymentType'); ?>
		<?php echo $form->textField($model,'paymentType',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'paymentType'); ?>
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

	<div class="row">
		<?php echo $form->labelEx($model,'unitPrice'); ?>
		<?php echo $form->textField($model,'unitPrice',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'unitPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'purchaseReturn'); ?>
		<?php echo $form->textField($model,'purchaseReturn'); ?>
		<?php echo $form->error($model,'purchaseReturn'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->