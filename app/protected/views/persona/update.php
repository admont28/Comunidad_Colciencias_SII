<?php
/* @var $this PersonaController */
/* @var $model Persona */

$this->breadcrumbs=array(
	'Personas'=>array('admin'),
	$model->idPersona=>array('view','id'=>$model->idPersona),
	'Actualizar',
);
?>

<div class="titulo1">
	<h2>Información Básica </h2>
</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>