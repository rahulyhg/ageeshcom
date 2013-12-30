<?php
$this->breadcrumbs=array(
	'Expense Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ExpenseTypes', 'url'=>array('index')),
	array('label'=>'Manage ExpenseTypes', 'url'=>array('admin')),
);
?>

<h1>Create ExpenseTypes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>