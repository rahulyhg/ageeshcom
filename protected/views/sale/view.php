<?php
$this->breadcrumbs=array(
	'Sales'=>array('index'),
	$model->billNo,
);

$this->menu=array(
	array('label'=>'List Sale', 'url'=>array('index')),
	array('label'=>'Create Sale', 'url'=>array('create')),
	array('label'=>'Update Sale', 'url'=>array('update', 'id'=>$model->billNo)),
	array('label'=>'Delete Sale', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->billNo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sale', 'url'=>array('admin')),
);
?>

<h1>View Sale #<?php echo $model->billNo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'billNo',
		'customerCode',
		'billAmount',
		'discount',
		'amount',
		'entryDate',
		'remarks',
	),
)); ?>
