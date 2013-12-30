<?php
$this->breadcrumbs=array(
	'Purchase Products'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PurchaseProducts', 'url'=>array('index')),
	array('label'=>'Create PurchaseProducts', 'url'=>array('create')),
	array('label'=>'View PurchaseProducts', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PurchaseProducts', 'url'=>array('admin')),
);
?>

<h1>Update PurchaseProducts <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>