<?php
/* @var $this IdiomaController */
/* @var $model Idioma */

$this->breadcrumbs=array(
	'Idiomas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Idioma', 'url'=>array('index')),
	array('label'=>'Manage Idioma', 'url'=>array('admin')),
);
?>

<h1>Create Idioma</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>