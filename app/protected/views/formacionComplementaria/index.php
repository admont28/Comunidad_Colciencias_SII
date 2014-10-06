<?php
/* @var $this FormacionComplementariaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Formacion Complementarias',
);

$this->menu=array(
	array('label'=>'Create FormacionComplementaria', 'url'=>array('create')),
	array('label'=>'Manage FormacionComplementaria', 'url'=>array('admin')),
);
?>

<h1>Formacion Complementarias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
