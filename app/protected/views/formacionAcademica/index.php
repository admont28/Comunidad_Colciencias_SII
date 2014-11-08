<?php
/* @var $this FormacionAcademicaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Formación Académica',
);

$this->menu=array(
	array('label'=>'Crear Formación Académica', 'url'=>array('create')),
	array('label'=>'Administrar Formación Académica', 'url'=>array('admin')),
);
?>

<h1>Formación Académica</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
