<?php
$this->breadcrumbs=array(
	'Sale Products'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SaleProducts', 'url'=>array('index')),
	array('label'=>'Create SaleProducts', 'url'=>array('create')),
	array('label'=>'Update SaleProducts', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SaleProducts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SaleProducts', 'url'=>array('admin')),
);
?>

<h1>View SaleProducts #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'billNo',
		'companyCode',
		'productCode',
		'productQuantity',
		'amount',
		'taxAmount',
		'unitPrice',
		'remarks',
	),
)); ?>
