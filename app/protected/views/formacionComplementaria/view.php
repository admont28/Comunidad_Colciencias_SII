<?php
/* @var $this FormacionComplementariaController */
/* @var $model FormacionComplementaria */

$this->breadcrumbs=array(
	'Formacion Complementarias'=>array('index'),
	$model->idFormacionComplementaria,
);

$this->menu=array(
	array('label'=>'List FormacionComplementaria', 'url'=>array('index')),
	array('label'=>'Create FormacionComplementaria', 'url'=>array('create')),
	array('label'=>'Update FormacionComplementaria', 'url'=>array('update', 'id'=>$model->idFormacionComplementaria)),
	array('label'=>'Delete FormacionComplementaria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idFormacionComplementaria),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FormacionComplementaria', 'url'=>array('admin')),
);
?>

<h1>View FormacionComplementaria #<?php echo $model->idFormacionComplementaria; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idFormacionComplementaria',
		'tituloObtenido',
		'InformacionFormacion_idInformacionFormacion',
	),
)); ?>
