<?php
/* @var $this ProyectosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Proyectoses',
);

$this->menu=array(
	array('label'=>'Crear un proyecto', 'url'=>array('create')),
	array('label'=>'Administrar proyectos', 'url'=>array('admin')),
);
?>

<h1>Proyectoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
