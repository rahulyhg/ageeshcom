<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'purchase-products-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'purchaseId'); ?>
		<?php echo $form->textField($model,'purchaseId',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'purchaseId'); ?>
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
		<?php echo $form->labelEx($model,'productQuantity'); ?>
		<?php echo $form->textField($model,'productQuantity'); ?>
		<?php echo $form->error($model,'productQuantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'taxAmount'); ?>
		<?php echo $form->textField($model,'taxAmount',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'taxAmount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unitPrice'); ?>
		<?php echo $form->textField($model,'unitPrice',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'unitPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discount'); ?>
		<?php echo $form->textField($model,'discount',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'discount'); ?>
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