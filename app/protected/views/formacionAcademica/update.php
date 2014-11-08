<?php
/* @var $this FormacionAcademicaController */
/* @var $model FormacionAcademica */

$this->breadcrumbs=array(
	'Formación Académica'=>array('index'),
	$model->idFormacionAcademica=>array('view','id'=>$model->idFormacionAcademica),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Formación Académica', 'url'=>array('index')),
	array('label'=>'Crear Formación  Académica', 'url'=>array('create')),
	array('label'=>'Ver Formación Académica', 'url'=>array('view', 'id'=>$model->idFormacionAcademica)),
	array('label'=>'Administrar Formación Académica', 'url'=>array('admin')),
);
?>

<h1>Actualizar Formación Académica <?php echo $model->idFormacionAcademica; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>