<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->code), array('view', 'id'=>$data->code)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('companyCode')); ?>:</b>
	<?php echo CHtml::encode($data->companyCode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('retailAmount')); ?>:</b>
	<?php echo CHtml::encode($data->retailAmount); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('distAmount')); ?>:</b>
	<?php echo CHtml::encode($data->distAmount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wholeAmount')); ?>:</b>
	<?php echo CHtml::encode($data->wholeAmount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('retailerDate')); ?>:</b>
	<?php echo CHtml::encode($data->retailerDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wholeDate')); ?>:</b>
	<?php echo CHtml::encode($data->wholeDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('distDate')); ?>:</b>
	<?php echo CHtml::encode($data->distDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tax')); ?>:</b>
	<?php echo CHtml::encode($data->tax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entry')); ?>:</b>
	<?php echo CHtml::encode($data->entry); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	*/ ?>

</div>