<?php
/* @var $this InformacionFormacionController */
/* @var $model InformacionFormacion */

$this->breadcrumbs=array(
	'Informacion Formacions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List InformacionFormacion', 'url'=>array('index')),
	array('label'=>'Create InformacionFormacion', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#informacion-formacion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Informacion Formacions</h1>

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
	'id'=>'informacion-formacion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idInformacionFormacion',
		'nivelFormacion',
		'institucion',
		'programaAcademico',
		'fechaInicio',
		'fechaFinalizacion',
		/*
		'tiempoFormacion',
		'unidadTiempoFormacion',
		'promedioPeriodos',
		'Ciudad_idCiudad',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
