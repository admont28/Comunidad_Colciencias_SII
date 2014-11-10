<?php
/* @var $this FormacionAcademicaController */
/* @var $model FormacionAcademica */

$this->breadcrumbs=array(
	'Formación Académica'=>array('admin'),
	'Administrar',
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

<div class="titulo1">
	<h2>Formación</h2>
</div>

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

<div class="tituloTabla">
	<h2>TRAYECTORIA ESCOLAR </h2>
</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'formacion-academica-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'cssFile'=> Yii::app()->request->baseUrl.'/css/gridview.css',
	'columns'=>array(
		//'idFormacionAcademica',
		'formAcaFechaInicio',
		'formAcaNivelFormacion',
		'formAcaFechaFinalizacion',
		'formAcaInstitucion',
		'formAcaBecado',
		/*
		'formAcaInstitucionOfreceBeca',
		'formAcaIntensidadHoraria',
		'formAcaFechaObtencionTitulo',
		'formAcaProgramaAcademico',
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

<h2 style="text-align: right;"> 
	<?php echo CHtml::button('Agregar', array('submit' => array('FormacionAcademica/create'),'class'=>'button')); ?> 
</h1>

