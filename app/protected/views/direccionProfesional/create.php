<?php
/* @var $this DireccionProfesionalController */
/* @var $model DireccionProfesional */

$this->breadcrumbs=array(
	'Direccion Profesionals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DireccionProfesional', 'url'=>array('index')),
	array('label'=>'Manage DireccionProfesional', 'url'=>array('admin')),
);
?>

<h1>Create DireccionProfesional</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>