<?php
/* @var $this DireccionProfesionalController */
/* @var $model DireccionProfesional */

$this->breadcrumbs=array(
	'Direccion Profesionals'=>array('index'),
	$model->idDireccionProfesional=>array('view','id'=>$model->idDireccionProfesional),
	'Update',
);

$this->menu=array(
	array('label'=>'List DireccionProfesional', 'url'=>array('index')),
	array('label'=>'Create DireccionProfesional', 'url'=>array('create')),
	array('label'=>'View DireccionProfesional', 'url'=>array('view', 'id'=>$model->idDireccionProfesional)),
	array('label'=>'Manage DireccionProfesional', 'url'=>array('admin')),
);
?>

<h1>Update DireccionProfesional <?php echo $model->idDireccionProfesional; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>