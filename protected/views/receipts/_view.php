<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('receiptsNo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->receiptsNo), array('view', 'id'=>$data->receiptsNo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customerCode')); ?>:</b>
	<?php echo CHtml::encode($data->customerCode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billNo')); ?>:</b>
	<?php echo CHtml::encode($data->billNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paymentType')); ?>:</b>
	<?php echo CHtml::encode($data->paymentType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billDate')); ?>:</b>
	<?php echo CHtml::encode($data->billDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entryDate')); ?>:</b>
	<?php echo CHtml::encode($data->entryDate); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('remarks')); ?>:</b>
	<?php echo CHtml::encode($data->remarks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unitPrice')); ?>:</b>
	<?php echo CHtml::encode($data->unitPrice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purchaseReturn')); ?>:</b>
	<?php echo CHtml::encode($data->purchaseReturn); ?>
	<br />

	*/ ?>

</div>