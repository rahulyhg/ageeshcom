<?php
$this->breadcrumbs=array(
	'Purchase Returns',
);

$this->menu=array(
	array('label'=>'Create PurchaseReturn', 'url'=>array('create')),
	array('label'=>'Manage PurchaseReturn', 'url'=>array('admin')),
);
?>

<h1>Purchase Returns</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
