<?php
$this->breadcrumbs=array(
	'Sale Products'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SaleProducts', 'url'=>array('index')),
	array('label'=>'Manage SaleProducts', 'url'=>array('admin')),
);
?>

<h1>Create SaleProducts</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>