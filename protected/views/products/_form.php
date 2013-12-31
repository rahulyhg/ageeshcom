<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'products-form',
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
		<?php echo $form->labelEx($model,'companyCode'); ?>
		<?php $records = Company::model()->findAll("status = 'active'");
		$list = CHtml::listData($records, 'code', 'name');
	    echo $form->dropDownList($model, 'companyCode', CHtml::listData($records, 'code', 'name'));?>
		<?php echo $form->error($model,'companyCode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'retailAmount'); ?>
		<?php echo $form->textField($model,'retailAmount',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'retailAmount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'distAmount'); ?>
		<?php echo $form->textField($model,'distAmount',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'distAmount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wholeAmount'); ?>
		<?php echo $form->textField($model,'wholeAmount',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'wholeAmount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'retailerDate'); ?>
		<?php 
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
		    'model' => $model,
		    'attribute' => 'retailerDate',
			'options' => array(
	        'dateFormat' => 'yy-mm-dd'),
		    'htmlOptions' => array(
		        'size' => '10',         // textField size
		        'maxlength' => '10',    // textField maxlength
		    ),
		));
		?>
		<?php echo $form->error($model,'retailerDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wholeDate'); ?>
		<?php 
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
		    'model' => $model,
		    'attribute' => 'wholeDate',
			'options' => array(
	        'dateFormat' => 'yy-mm-dd'),
		    'htmlOptions' => array(
		        'size' => '10',         // textField size
		        'maxlength' => '10',    // textField maxlength
		    ),
		));
		?>
		<?php echo $form->error($model,'wholeDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'distDate'); ?>
		<?php 
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
		    'model' => $model,
		    'attribute' => 'distDate',
			'options' => array(
	        'dateFormat' => 'yy-mm-dd'),
		    'htmlOptions' => array(
		        'size' => '10',         // textField size
		        'maxlength' => '10',    // textField maxlength
		    ),
		));
		 ?>
		<?php echo $form->error($model,'distDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tax'); ?>
		<?php echo $form->textField($model,'tax',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'tax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo ZHtml::enumDropDownList( $model,'status' ); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->