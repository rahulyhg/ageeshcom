<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<?php 
$user = Yii::app()->session->get('user');

if(isset($user))
{
?>
<a href="<?php echo Utilities::createAbsoluteUrl('users','index'); ?>" >Users</a> </br>
<a href="<?php echo Utilities::createAbsoluteUrl('company','index'); ?>" >Company</a> </br>
<a href="<?php echo Utilities::createAbsoluteUrl('products','index'); ?>" >Products</a> </br>
<a href="<?php echo Utilities::createAbsoluteUrl('customers','index'); ?>" >Customers</a> </br>
<a href="<?php echo Utilities::createAbsoluteUrl('purchase','index'); ?>" >Purchase</a> </br>
<a href="<?php echo Utilities::createAbsoluteUrl('routes','index'); ?>" >Routes</a> </br>
<a href="<?php echo Utilities::createAbsoluteUrl('sale','index'); ?>" >Sale</a> </br>
<a href="<?php echo Utilities::createAbsoluteUrl('receipts','index'); ?>" >Receipts</a> </br>
<a href="<?php echo Utilities::createAbsoluteUrl('expenses','index'); ?>" >Expenses</a> </br>

<?php 	
}
else
{
?>	
	 Please login using your credentials. <a href="/site/login">Login</a>
<?php 	
}
?>