<?php
/* @var $this FormacionAcademicaController */
/* @var $model FormacionAcademica */

$this->breadcrumbs=array(
	'Formación Académica'=>array('admin'),
	'Crear',
);

/*
$this->menu=array(
	array('label'=>'Listar Formación Académica', 'url'=>array('index')),
	array('label'=>'Administrar Formación Académica', 'url'=>array('admin')),
);
*/
?>

<div class="titulo1">
	<h2>Formación</h2>
</div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>