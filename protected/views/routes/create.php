<?php
$this->breadcrumbs=array(
	'Routes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Routes', 'url'=>array('index')),
	array('label'=>'Manage Routes', 'url'=>array('admin')),
);
?>

<h1>Create Routes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>