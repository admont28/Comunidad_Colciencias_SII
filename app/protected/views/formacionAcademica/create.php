<?php
/* @var $this FormacionAcademicaController */
/* @var $model FormacionAcademica */

$this->breadcrumbs=array(
	'Formación Académica'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Formación Académica', 'url'=>array('index')),
	array('label'=>'Administrar Formación Académica', 'url'=>array('admin')),
);
?>

<h1>Crear Formación Académica para: <?php echo Yii::app()->user->id ?> </h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>