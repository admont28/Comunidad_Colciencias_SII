<?php
/* @var $this DireccionPersonalController */
/* @var $model DireccionPersonal */

$this->breadcrumbs=array(
	'Direccion Personals'=>array('index'),
	$model->idDireccionPersonal,
);

$this->menu=array(
	array('label'=>'List DireccionPersonal', 'url'=>array('index')),
	array('label'=>'Create DireccionPersonal', 'url'=>array('create')),
	array('label'=>'Update DireccionPersonal', 'url'=>array('update', 'id'=>$model->idDireccionPersonal)),
	array('label'=>'Delete DireccionPersonal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idDireccionPersonal),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DireccionPersonal', 'url'=>array('admin')),
);
?>

<h1>View DireccionPersonal #<?php echo $model->idDireccionPersonal; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idDireccionPersonal',
		'direccion',
		'barrio',
		'codigoPostal',
		'Ciudad_idCiudad',
		'telefonoFijo',
		'telefonoMovil',
		'apartadoPostal',
		'email',
		'sitioWeb',
	),
)); ?>
