<?php
/* @var $this FormacionAcademicaController */
/* @var $model FormacionAcademica */

$this->breadcrumbs=array(
	'Formación Académica'=>array('admin'),
	$model->idFormacionAcademica,
);

?>

<div class="titulo1">
	<h2>Ver Formación Número: <?php echo $model->idFormacionAcademica; ?></h2>
</div>

<?php $this->renderPartial('_view', array('model'=>$model)); ?> 

<!--
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idFormacionAcademica',
		'formAcaIntensidadHoraria',
		'formAcaFechaObtencionTitulo',
		'formAcaBecado',
		'formAcaInstitucionOfreceBeca',
		'formAcaNivelFormacion',
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
	),
)); ?>
-->