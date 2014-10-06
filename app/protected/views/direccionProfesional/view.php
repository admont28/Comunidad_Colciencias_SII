<?php
/* @var $this DireccionProfesionalController */
/* @var $model DireccionProfesional */

$this->breadcrumbs=array(
	'Direccion Profesionals'=>array('index'),
	$model->idDireccionProfesional,
);

$this->menu=array(
	array('label'=>'List DireccionProfesional', 'url'=>array('index')),
	array('label'=>'Create DireccionProfesional', 'url'=>array('create')),
	array('label'=>'Update DireccionProfesional', 'url'=>array('update', 'id'=>$model->idDireccionProfesional)),
	array('label'=>'Delete DireccionProfesional', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idDireccionProfesional),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DireccionProfesional', 'url'=>array('admin')),
);
?>

<h1>View DireccionProfesional #<?php echo $model->idDireccionProfesional; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idDireccionProfesional',
		'institucion',
		'direccionInstitucion',
		'barrio',
		'codigoPostal',
		'apartadoPostal',
		'Ciudad_idCiudad',
		'telefonoFijo',
		'extension',
		'emailInstitucional',
		'paginaInstitucional',
	),
)); ?>
