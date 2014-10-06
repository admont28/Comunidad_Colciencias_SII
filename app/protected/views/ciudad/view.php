<?php
/* @var $this CiudadController */
/* @var $model Ciudad */

$this->breadcrumbs=array(
	'Ciudads'=>array('index'),
	$model->idCiudad,
);

$this->menu=array(
	array('label'=>'List Ciudad', 'url'=>array('index')),
	array('label'=>'Create Ciudad', 'url'=>array('create')),
	array('label'=>'Update Ciudad', 'url'=>array('update', 'id'=>$model->idCiudad)),
	array('label'=>'Delete Ciudad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idCiudad),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ciudad', 'url'=>array('admin')),
);
?>

<h1>View Ciudad #<?php echo $model->idCiudad; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idCiudad',
		'nombreCiudad',
		'Departamento_idDepartamento',
	),
)); ?>
