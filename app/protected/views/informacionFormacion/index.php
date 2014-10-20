<?php
/* @var $this InformacionFormacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Informacion Formacions',
);

$this->menu=array(
	array('label'=>'Create InformacionFormacion', 'url'=>array('create')),
	array('label'=>'Manage InformacionFormacion', 'url'=>array('admin')),
);
?>

<h1>Informacion Formacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
