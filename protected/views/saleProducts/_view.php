<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billNo')); ?>:</b>
	<?php echo CHtml::encode($data->billNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('companyCode')); ?>:</b>
	<?php echo CHtml::encode($data->companyCode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('productCode')); ?>:</b>
	<?php echo CHtml::encode($data->productCode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('productQuantity')); ?>:</b>
	<?php echo CHtml::encode($data->productQuantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('taxAmount')); ?>:</b>
	<?php echo CHtml::encode($data->taxAmount); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('unitPrice')); ?>:</b>
	<?php echo CHtml::encode($data->unitPrice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remarks')); ?>:</b>
	<?php echo CHtml::encode($data->remarks); ?>
	<br />

	*/ ?>

</div>