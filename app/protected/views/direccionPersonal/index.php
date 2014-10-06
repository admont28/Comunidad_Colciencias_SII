<?php
/* @var $this DireccionPersonalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Direccion Personals',
);

$this->menu=array(
	array('label'=>'Create DireccionPersonal', 'url'=>array('create')),
	array('label'=>'Manage DireccionPersonal', 'url'=>array('admin')),
);
?>

<h1>Direccion Personals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
