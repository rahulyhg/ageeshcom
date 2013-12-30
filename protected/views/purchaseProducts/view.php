<?php
$this->breadcrumbs=array(
	'Purchase Products'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PurchaseProducts', 'url'=>array('index')),
	array('label'=>'Create PurchaseProducts', 'url'=>array('create')),
	array('label'=>'Update PurchaseProducts', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PurchaseProducts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PurchaseProducts', 'url'=>array('admin')),
);
?>

<h1>View PurchaseProducts #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'purchaseId',
		'companyCode',
		'productCode',
		'productQuantity',
		'amount',
		'taxAmount',
		'unitPrice',
		'discount',
		'remarks',
	),
)); ?>
