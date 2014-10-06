<?php
/* @var $this DepartamentoController */
/* @var $model Departamento */

$this->breadcrumbs=array(
	'Departamentos'=>array('index'),
	$model->idDepartamento,
);

$this->menu=array(
	array('label'=>'List Departamento', 'url'=>array('index')),
	array('label'=>'Create Departamento', 'url'=>array('create')),
	array('label'=>'Update Departamento', 'url'=>array('update', 'id'=>$model->idDepartamento)),
	array('label'=>'Delete Departamento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idDepartamento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Departamento', 'url'=>array('admin')),
);
?>

<h1>View Departamento #<?php echo $model->idDepartamento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idDepartamento',
		'nombreDepartamento',
		'Pais_idPais',
	),
)); ?>
