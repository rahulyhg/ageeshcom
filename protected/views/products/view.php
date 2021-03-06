<?php
$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Products', 'url'=>array('index')),
	array('label'=>'Create Products', 'url'=>array('create')),
	array('label'=>'Update Products', 'url'=>array('update', 'id'=>$model->code)),
	array('label'=>'Delete Products', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Products', 'url'=>array('admin')),
);
?>

<h1>View Products #<?php echo $model->code; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'code',
		'companyCode',
		'description',
		'name',
		'quantity',
		'amount',
		'retailAmount',
		'distAmount',
		'wholeAmount',
		'retailerDate',
		'wholeDate',
		'distDate',
		'tax',
		'entry',
		'status',
	),
)); ?>
