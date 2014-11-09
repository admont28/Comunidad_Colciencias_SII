<?php
/* @var $this ProyectosController */
/* @var $model Proyectos */

$this->breadcrumbs=array(
	'Proyectoses'=>array('index'),
	$model->idProyectos=>array('view','id'=>$model->idProyectos),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de proyectos', 'url'=>array('index')),
	array('label'=>'Crear un proyecto', 'url'=>array('create')),
	array('label'=>'Ver proyectos', 'url'=>array('view', 'id'=>$model->idProyectos)),
	array('label'=>'Administrar proyectos', 'url'=>array('admin')),
);
?>

<h1>Update Proyectos <?php echo $model->idProyectos; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>