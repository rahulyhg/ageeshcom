<?php
$this->breadcrumbs=array(
	'Purchase Returns'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PurchaseReturn', 'url'=>array('index')),
	array('label'=>'Create PurchaseReturn', 'url'=>array('create')),
	array('label'=>'View PurchaseReturn', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PurchaseReturn', 'url'=>array('admin')),
);
?>

<h1>Update PurchaseReturn <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>