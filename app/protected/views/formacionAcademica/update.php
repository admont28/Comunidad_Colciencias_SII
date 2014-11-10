<?php
/* @var $this FormacionAcademicaController */
/* @var $model FormacionAcademica */

$this->breadcrumbs=array(
	'Formación Académica'=>array('admin'),
	$model->idFormacionAcademica=>array('view','id'=>$model->idFormacionAcademica),
	'Actualizar',
);
?>
<div class="titulo1">
	<h2>Actualizar Formación Número: <?php echo $model->idFormacionAcademica; ?></h2>
</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>