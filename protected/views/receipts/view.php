<?php
$this->breadcrumbs=array(
	'Receipts'=>array('index'),
	$model->receiptsNo,
);

$this->menu=array(
	array('label'=>'List Receipts', 'url'=>array('index')),
	array('label'=>'Create Receipts', 'url'=>array('create')),
	array('label'=>'Update Receipts', 'url'=>array('update', 'id'=>$model->receiptsNo)),
	array('label'=>'Delete Receipts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->receiptsNo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Receipts', 'url'=>array('admin')),
);
?>

<h1>View Receipts #<?php echo $model->receiptsNo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'receiptsNo',
		'customerCode',
		'amount',
		'billNo',
		'paymentType',
		'billDate',
		'entryDate',
		'remarks',
		'unitPrice',
		'purchaseReturn',
	),
)); ?>
