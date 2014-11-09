<?php
/* @var $this ProyectosController */
/* @var $model Proyectos */

$this->breadcrumbs=array(
	'Proyectoses'=>array('index'),
	'create',
);

$this->menu=array(
	array('label'=>'Lista de proyectos', 'url'=>array('index')),
	array('label'=>'Administrar Proyectos', 'url'=>array('admin')),
);
?>

<h1>Create Proyectos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>