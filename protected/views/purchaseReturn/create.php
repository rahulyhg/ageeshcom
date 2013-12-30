<?php
$this->breadcrumbs=array(
	'Purchase Returns'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PurchaseReturn', 'url'=>array('index')),
	array('label'=>'Manage PurchaseReturn', 'url'=>array('admin')),
);
?>

<h1>Create PurchaseReturn</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>