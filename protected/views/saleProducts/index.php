<?php
$this->breadcrumbs=array(
	'Sale Products',
);

$this->menu=array(
	array('label'=>'Create SaleProducts', 'url'=>array('create')),
	array('label'=>'Manage SaleProducts', 'url'=>array('admin')),
);
?>

<h1>Sale Products</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
