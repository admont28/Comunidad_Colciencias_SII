<?php
/* @var $this DireccionPersonalController */
/* @var $model DireccionPersonal */

$this->breadcrumbs=array(
	'Direccion Personals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DireccionPersonal', 'url'=>array('index')),
	array('label'=>'Manage DireccionPersonal', 'url'=>array('admin')),
);
?>

<h1>Create DireccionPersonal</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>