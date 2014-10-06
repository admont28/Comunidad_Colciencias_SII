<?php
/* @var $this FormacionAcademicaController */
/* @var $model FormacionAcademica */

$this->breadcrumbs=array(
	'Formacion Academicas'=>array('index'),
	$model->idFormacionAcademica=>array('view','id'=>$model->idFormacionAcademica),
	'Update',
);

$this->menu=array(
	array('label'=>'List FormacionAcademica', 'url'=>array('index')),
	array('label'=>'Create FormacionAcademica', 'url'=>array('create')),
	array('label'=>'View FormacionAcademica', 'url'=>array('view', 'id'=>$model->idFormacionAcademica)),
	array('label'=>'Manage FormacionAcademica', 'url'=>array('admin')),
);
?>

<h1>Update FormacionAcademica <?php echo $model->idFormacionAcademica; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>