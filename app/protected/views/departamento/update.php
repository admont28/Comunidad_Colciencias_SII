<?php
/* @var $this DepartamentoController */
/* @var $model Departamento */

$this->breadcrumbs=array(
	'Departamentos'=>array('index'),
	$model->idDepartamento=>array('view','id'=>$model->idDepartamento),
	'Update',
);

$this->menu=array(
	array('label'=>'List Departamento', 'url'=>array('index')),
	array('label'=>'Create Departamento', 'url'=>array('create')),
	array('label'=>'View Departamento', 'url'=>array('view', 'id'=>$model->idDepartamento)),
	array('label'=>'Manage Departamento', 'url'=>array('admin')),
);
?>

<h1>Update Departamento <?php echo $model->idDepartamento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>