<?php
/* @var $this InformacionFormacionController */
/* @var $model InformacionFormacion */

$this->breadcrumbs=array(
	'Informacion Formacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InformacionFormacion', 'url'=>array('index')),
	array('label'=>'Manage InformacionFormacion', 'url'=>array('admin')),
);
?>

<h1>Create InformacionFormacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>