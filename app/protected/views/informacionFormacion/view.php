<?php
/* @var $this InformacionFormacionController */
/* @var $model InformacionFormacion */

$this->breadcrumbs=array(
	'Informacion Formacions'=>array('index'),
	$model->idInformacionFormacion,
);

$this->menu=array(
	array('label'=>'List InformacionFormacion', 'url'=>array('index')),
	array('label'=>'Create InformacionFormacion', 'url'=>array('create')),
	array('label'=>'Update InformacionFormacion', 'url'=>array('update', 'id'=>$model->idInformacionFormacion)),
	array('label'=>'Delete InformacionFormacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idInformacionFormacion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InformacionFormacion', 'url'=>array('admin')),
);
?>

<h1>View InformacionFormacion #<?php echo $model->idInformacionFormacion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idInformacionFormacion',
		'nivelFormacion',
		'institucion',
		'programaAcademico',
		'fechaInicio',
		'fechaFinalizacion',
		'tiempoFormacion',
		'unidadTiempoFormacion',
		'promedioPeriodos',
		'Ciudad_idCiudad',
	),
)); ?>
