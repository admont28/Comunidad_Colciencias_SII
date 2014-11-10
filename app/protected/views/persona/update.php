<?php
/* @var $this PersonaController */
/* @var $model Persona */

$this->breadcrumbs=array(
	'Personas'=>array('admin'),
	$model->idPersona=>array('view','id'=>$model->idPersona),
	'Actualizar',
);

$this->menu=array(
	/*
	array('label'=>'Listar Persona', 'url'=>array('index')),
	array('label'=>'Crear Persona', 'url'=>array('create')),
	array('label'=>'Ver Persona', 'url'=>array('view', 'id'=>$model->idPersona)),
	array('label'=>'Administrar Persona', 'url'=>array('admin')),
	*/
);
?>

<div class="titulo1">
	<h2>Información Básica </h2>
</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>