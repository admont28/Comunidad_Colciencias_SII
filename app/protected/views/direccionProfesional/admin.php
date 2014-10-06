<?php
/* @var $this DireccionProfesionalController */
/* @var $model DireccionProfesional */

$this->breadcrumbs=array(
	'Direccion Profesionals'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List DireccionProfesional', 'url'=>array('index')),
	array('label'=>'Create DireccionProfesional', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#direccion-profesional-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Direccion Profesionals</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'direccion-profesional-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idDireccionProfesional',
		'institucion',
		'direccionInstitucion',
		'barrio',
		'codigoPostal',
		'apartadoPostal',
		/*
		'Ciudad_idCiudad',
		'telefonoFijo',
		'extension',
		'emailInstitucional',
		'paginaInstitucional',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
