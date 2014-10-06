<?php
/* @var $this FormacionComplementariaController */
/* @var $model FormacionComplementaria */

$this->breadcrumbs=array(
	'Formacion Complementarias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FormacionComplementaria', 'url'=>array('index')),
	array('label'=>'Manage FormacionComplementaria', 'url'=>array('admin')),
);
?>

<h1>Create FormacionComplementaria</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>