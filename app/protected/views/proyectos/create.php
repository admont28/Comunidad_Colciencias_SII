<?php
/* @var $this ProyectosController */
/* @var $model Proyectos */

$this->breadcrumbs=array(
	'Proyectoses'=>array('index'),
	'create',
);

?>
<div class = "titulo1">
	<h2>Proyectos</h2>
</div>


<?php $this->renderPartial('_form', array('model'=>$model,'modelParticipantes'=>$modelParticipantes)); ?>