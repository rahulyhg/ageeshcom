<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('companyCode')); ?>:</b>
	<?php echo CHtml::encode($data->companyCode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purchaseBillNumber')); ?>:</b>
	<?php echo CHtml::encode($data->purchaseBillNumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discount')); ?>:</b>
	<?php echo CHtml::encode($data->discount); ?>
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

	*/ ?>

</div>