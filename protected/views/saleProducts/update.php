<?php
$this->breadcrumbs=array(
	'Sale Products'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SaleProducts', 'url'=>array('index')),
	array('label'=>'Create SaleProducts', 'url'=>array('create')),
	array('label'=>'View SaleProducts', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SaleProducts', 'url'=>array('admin')),
);
?>

<h1>Update SaleProducts <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>