<?php
$this->breadcrumbs=array(
	'Receipts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Receipts', 'url'=>array('index')),
	array('label'=>'Manage Receipts', 'url'=>array('admin')),
);
?>

<h1>Create Receipts</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>