<?php
$this->breadcrumbs=array(
	'Expense Types'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ExpenseTypes', 'url'=>array('index')),
	array('label'=>'Create ExpenseTypes', 'url'=>array('create')),
	array('label'=>'View ExpenseTypes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ExpenseTypes', 'url'=>array('admin')),
);
?>

<h1>Update ExpenseTypes <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>