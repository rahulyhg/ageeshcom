<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('billNo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->billNo), array('view', 'id'=>$data->billNo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customerCode')); ?>:</b>
	<?php echo CHtml::encode($data->customerCode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billAmount')); ?>:</b>
	<?php echo CHtml::encode($data->billAmount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discount')); ?>:</b>
	<?php echo CHtml::encode($data->discount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entryDate')); ?>:</b>
	<?php echo CHtml::encode($data->entryDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remarks')); ?>:</b>
	<?php echo CHtml::encode($data->remarks); ?>
	<br />


</div>