<?php
/* @var $this FormacionAcademicaController */
/* @var $model FormacionAcademica */

$this->breadcrumbs=array(
	'Formacion Academicas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FormacionAcademica', 'url'=>array('index')),
	array('label'=>'Manage FormacionAcademica', 'url'=>array('admin')),
);
?>

<h1>Create FormacionAcademica</h1>

<?php $this->renderPartial('_form', array('modelFormacionAcademica'=>$modelFormacionAcademica)); ?>