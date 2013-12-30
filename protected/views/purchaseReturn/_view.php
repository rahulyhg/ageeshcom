<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customerCode')); ?>:</b>
	<?php echo CHtml::encode($data->customerCode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('companyCode')); ?>:</b>
	<?php echo CHtml::encode($data->companyCode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('productCode')); ?>:</b>
	<?php echo CHtml::encode($data->productCode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('returnType')); ?>:</b>
	<?php echo CHtml::encode($data->returnType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entryDate')); ?>:</b>
	<?php echo CHtml::encode($data->entryDate); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('remarks')); ?>:</b>
	<?php echo CHtml::encode($data->remarks); ?>
	<br />

	*/ ?>

</div>