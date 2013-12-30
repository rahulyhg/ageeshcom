<?php
$this->breadcrumbs=array(
	'Purchase Returns'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PurchaseReturn', 'url'=>array('index')),
	array('label'=>'Create PurchaseReturn', 'url'=>array('create')),
	array('label'=>'Update PurchaseReturn', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PurchaseReturn', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PurchaseReturn', 'url'=>array('admin')),
);
?>

<h1>View PurchaseReturn #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'customerCode',
		'companyCode',
		'productCode',
		'quantity',
		'returnType',
		'entryDate',
		'remarks',
	),
)); ?>
