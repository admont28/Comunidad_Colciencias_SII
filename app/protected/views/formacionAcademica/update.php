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
<div class="titulo1">
	<h2>Formación</h2>
</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>