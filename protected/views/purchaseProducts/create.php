<?php
$this->breadcrumbs=array(
	'Purchase Products'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PurchaseProducts', 'url'=>array('index')),
	array('label'=>'Manage PurchaseProducts', 'url'=>array('admin')),
);
?>

<h1>Create PurchaseProducts</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>