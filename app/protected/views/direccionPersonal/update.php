<?php
/* @var $this DireccionPersonalController */
/* @var $model DireccionPersonal */

$this->breadcrumbs=array(
	'Direccion Personals'=>array('index'),
	$model->idDireccionPersonal=>array('view','id'=>$model->idDireccionPersonal),
	'Update',
);

$this->menu=array(
	array('label'=>'List DireccionPersonal', 'url'=>array('index')),
	array('label'=>'Create DireccionPersonal', 'url'=>array('create')),
	array('label'=>'View DireccionPersonal', 'url'=>array('view', 'id'=>$model->idDireccionPersonal)),
	array('label'=>'Manage DireccionPersonal', 'url'=>array('admin')),
);
?>

<h1>Update DireccionPersonal <?php echo $model->idDireccionPersonal; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>