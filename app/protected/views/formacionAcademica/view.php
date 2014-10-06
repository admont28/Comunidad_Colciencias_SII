<?php
/* @var $this FormacionAcademicaController */
/* @var $model FormacionAcademica */

$this->breadcrumbs=array(
	'Formacion Academicas'=>array('index'),
	$model->idFormacionAcademica,
);

$this->menu=array(
	array('label'=>'List FormacionAcademica', 'url'=>array('index')),
	array('label'=>'Create FormacionAcademica', 'url'=>array('create')),
	array('label'=>'Update FormacionAcademica', 'url'=>array('update', 'id'=>$model->idFormacionAcademica)),
	array('label'=>'Delete FormacionAcademica', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idFormacionAcademica),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FormacionAcademica', 'url'=>array('admin')),
);
?>

<h1>View FormacionAcademica #<?php echo $model->idFormacionAcademica; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idFormacionAcademica',
		'intensidadHoraria',
		'fechaObtencionTitulo',
		'becado',
		'institucionOfreceBeca',
		'InformacionFormacion_idInformacionFormacion',
	),
)); ?>
