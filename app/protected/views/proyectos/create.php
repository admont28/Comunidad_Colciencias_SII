<?php
/* @var $this ProyectosController */
/* @var $model Proyectos */

$this->breadcrumbs=array(
	'Proyectoses'=>array('index'),
	'create',
);

/*$this->menu=array(
	array('label'=>'Lista de proyectos', 'url'=>array('index')),
	array('label'=>'Administrar Proyectos', 'url'=>array('admin')),
);
*/
?>
<div class = "titulo1">
	<h1>Proyectos</h1>
</div>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>