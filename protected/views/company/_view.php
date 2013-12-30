<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->code), array('view', 'id'=>$data->code)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('startDate')); ?>:</b>
	<?php echo CHtml::encode($data->startDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('endDate')); ?>:</b>
	<?php echo CHtml::encode($data->endDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tin')); ?>:</b>
	<?php echo CHtml::encode($data->tin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('companyTelephone')); ?>:</b>
	<?php echo CHtml::encode($data->companyTelephone); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('executiveName')); ?>:</b>
	<?php echo CHtml::encode($data->executiveName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('executivePhone')); ?>:</b>
	<?php echo CHtml::encode($data->executivePhone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusDate')); ?>:</b>
	<?php echo CHtml::encode($data->statusDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remarks')); ?>:</b>
	<?php echo CHtml::encode($data->remarks); ?>
	<br />

	*/ ?>

</div>