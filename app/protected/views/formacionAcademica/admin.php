<?php
/* @var $this FormacionAcademicaController */
/* @var $model FormacionAcademica */

$this->breadcrumbs=array(
	'Formación Académica'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Formación Académica', 'url'=>array('index')),
	array('label'=>'Crear Formación Académica', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#formacion-academica-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Formación Académica</h1>

<p>
Opcionalmente, puede introducir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<!--
<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>
-->

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'formacion-academica-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'idFormacionAcademica',
		'formAcaIntensidadHoraria',
		'formAcaFechaObtencionTitulo',
		'formAcaBecado',
		'formAcaInstitucionOfreceBeca',
		'formAcaNivelFormacion',
		/*
		'formAcaInstitucion',
		'formAcaProgramaAcademico',
		'formAcaFechaInicio',
		'formAcaFechaFinalizacion',
		'formAcaTiempoFormacion',
		'formAcaUnidadTiempoFormacion',
		'formAcaPromedioPeriodos',
		'formAcaCiudad_idCiudad',
		'nombreIdioma',
		'nivelEscritura',
		'nivelLectura',
		'nivelHabla',
		'nivelEscucha',
		'formComTituloObtenido',
		'formComNivelFormacion',
		'formComInstitucion',
		'formComProgramaAcademico',
		'formComFechaInicio',
		'formComFechaFinalizacon',
		'formComTiempoFormacion',
		'formComUnidadTiempoFormacion',
		'formComPromedioPeriodos',
		'formComCiudad_idCiudad',
		'Persona_idPersona',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
