<?php
/* @var $this InformacionFormacionController */
/* @var $model InformacionFormacion */

$this->breadcrumbs=array(
	'Informacion Formacions'=>array('index'),
	$model->idInformacionFormacion=>array('view','id'=>$model->idInformacionFormacion),
	'Update',
);

$this->menu=array(
	array('label'=>'List InformacionFormacion', 'url'=>array('index')),
	array('label'=>'Create InformacionFormacion', 'url'=>array('create')),
	array('label'=>'View InformacionFormacion', 'url'=>array('view', 'id'=>$model->idInformacionFormacion)),
	array('label'=>'Manage InformacionFormacion', 'url'=>array('admin')),
);
?>

<h1>Update InformacionFormacion <?php echo $model->idInformacionFormacion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>