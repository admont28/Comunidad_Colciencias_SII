<?php
/* @var $this ProyectosController */
/* @var $model Proyectos */

$this->breadcrumbs=array(
	'Proyectos'=>array('admin'),
	$model->idProyectos=>array('view','id'=>$model->idProyectos),
	'Update',
);
?>

<div class="titulo1">
	<h2>Actualizar Proyecto Número: <?php echo $model->idProyectos; ?></h2>
</div>

<?php $this->renderPartial('_form', array('model'=>$model,'modelParticipantes'=>$modelParticipantes)); ?>