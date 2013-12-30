<?php
$this->breadcrumbs=array(
	'Expense Types'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ExpenseTypes', 'url'=>array('index')),
	array('label'=>'Create ExpenseTypes', 'url'=>array('create')),
	array('label'=>'Update ExpenseTypes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ExpenseTypes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ExpenseTypes', 'url'=>array('admin')),
);
?>

<h1>View ExpenseTypes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'entryDate',
	),
)); ?>
