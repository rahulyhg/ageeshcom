<?php
$this->breadcrumbs=array(
	'Receipts'=>array('index'),
	$model->receiptsNo=>array('view','id'=>$model->receiptsNo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Receipts', 'url'=>array('index')),
	array('label'=>'Create Receipts', 'url'=>array('create')),
	array('label'=>'View Receipts', 'url'=>array('view', 'id'=>$model->receiptsNo)),
	array('label'=>'Manage Receipts', 'url'=>array('admin')),
);
?>

<h1>Update Receipts <?php echo $model->receiptsNo; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>