<?php
/* @var $this IdiomaController */
/* @var $model Idioma */

$this->breadcrumbs=array(
	'Idiomas'=>array('index'),
	$model->idIdioma=>array('view','id'=>$model->idIdioma),
	'Update',
);

$this->menu=array(
	array('label'=>'List Idioma', 'url'=>array('index')),
	array('label'=>'Create Idioma', 'url'=>array('create')),
	array('label'=>'View Idioma', 'url'=>array('view', 'id'=>$model->idIdioma)),
	array('label'=>'Manage Idioma', 'url'=>array('admin')),
);
?>

<h1>Update Idioma <?php echo $model->idIdioma; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>