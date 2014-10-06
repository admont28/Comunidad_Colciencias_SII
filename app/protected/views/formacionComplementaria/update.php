<?php
/* @var $this FormacionComplementariaController */
/* @var $model FormacionComplementaria */

$this->breadcrumbs=array(
	'Formacion Complementarias'=>array('index'),
	$model->idFormacionComplementaria=>array('view','id'=>$model->idFormacionComplementaria),
	'Update',
);

$this->menu=array(
	array('label'=>'List FormacionComplementaria', 'url'=>array('index')),
	array('label'=>'Create FormacionComplementaria', 'url'=>array('create')),
	array('label'=>'View FormacionComplementaria', 'url'=>array('view', 'id'=>$model->idFormacionComplementaria)),
	array('label'=>'Manage FormacionComplementaria', 'url'=>array('admin')),
);
?>

<h1>Update FormacionComplementaria <?php echo $model->idFormacionComplementaria; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>