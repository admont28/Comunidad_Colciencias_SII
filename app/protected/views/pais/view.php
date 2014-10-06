<?php
/* @var $this PaisController */
/* @var $model Pais */

$this->breadcrumbs=array(
	'Paises'=>array('index'),
	$model->idPais,
);

$this->menu=array(
	array('label'=>'List Pais', 'url'=>array('index')),
	array('label'=>'Create Pais', 'url'=>array('create')),
	array('label'=>'Update Pais', 'url'=>array('update', 'id'=>$model->idPais)),
	array('label'=>'Delete Pais', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPais),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pais', 'url'=>array('admin')),
);
?>

<h1>View Pais #<?php echo $model->idPais; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPais',
		'nombrePais',
	),
)); ?>
