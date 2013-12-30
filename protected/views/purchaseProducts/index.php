<?php
$this->breadcrumbs=array(
	'Purchase Products',
);

$this->menu=array(
	array('label'=>'Create PurchaseProducts', 'url'=>array('create')),
	array('label'=>'Manage PurchaseProducts', 'url'=>array('admin')),
);
?>

<h1>Purchase Products</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
