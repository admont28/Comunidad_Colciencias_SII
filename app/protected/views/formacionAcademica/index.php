<?php
/* @var $this FormacionAcademicaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Formacion Academicas',
);

$this->menu=array(
	array('label'=>'Create FormacionAcademica', 'url'=>array('create')),
	array('label'=>'Manage FormacionAcademica', 'url'=>array('admin')),
);
?>

<h1>Formacion Academicas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
