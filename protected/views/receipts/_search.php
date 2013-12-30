<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'receiptsNo'); ?>
		<?php echo $form->textField($model,'receiptsNo',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'customerCode'); ?>
		<?php echo $form->textField($model,'customerCode',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'amount'); ?>
		<?php echo $form->textField($model,'amount',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'billNo'); ?>
		<?php echo $form->textField($model,'billNo',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paymentType'); ?>
		<?php echo $form->textField($model,'paymentType',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'billDate'); ?>
		<?php echo $form->textField($model,'billDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'entryDate'); ?>
		<?php echo $form->textField($model,'entryDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'remarks'); ?>
		<?php echo $form->textArea($model,'remarks',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unitPrice'); ?>
		<?php echo $form->textField($model,'unitPrice',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'purchaseReturn'); ?>
		<?php echo $form->textField($model,'purchaseReturn'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->