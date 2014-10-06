<?php
/* @var $this DireccionProfesionalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Direccion Profesionals',
);

$this->menu=array(
	array('label'=>'Create DireccionProfesional', 'url'=>array('create')),
	array('label'=>'Manage DireccionProfesional', 'url'=>array('admin')),
);
?>

<h1>Direccion Profesionals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
