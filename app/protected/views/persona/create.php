<?php
/* @var $this PersonaController */
/* @var $model Persona */

$this->breadcrumbs=array(
	'Personas'=>array('admin'),
	'Crear',
);
?>

<div class="titulo1">
	<h2>Crear persona</h2>
</div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>