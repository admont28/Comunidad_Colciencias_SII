<?php
/* @var $this IdiomaController */
/* @var $model Idioma */

$this->breadcrumbs=array(
	'Idiomas'=>array('index'),
	$model->idIdioma,
);

$this->menu=array(
	array('label'=>'List Idioma', 'url'=>array('index')),
	array('label'=>'Create Idioma', 'url'=>array('create')),
	array('label'=>'Update Idioma', 'url'=>array('update', 'id'=>$model->idIdioma)),
	array('label'=>'Delete Idioma', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idIdioma),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Idioma', 'url'=>array('admin')),
);
?>

<h1>View Idioma #<?php echo $model->idIdioma; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idIdioma',
		'nombreIdioma',
		'nivelEscritura',
		'nivelLectura',
		'nivelHabla',
		'nivelEscucha',
	),
)); ?>
