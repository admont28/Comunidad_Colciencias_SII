<?php
/* @var $this PersonaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Personas',
);

$this->menu=array(
	array('label'=>'Crear Persona', 'url'=>array('create')),
	array('label'=>'Administrar Persona', 'url'=>array('admin')),
);
?>

<h1>Personas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
