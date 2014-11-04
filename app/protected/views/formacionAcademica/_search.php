<?php
/* @var $this FormacionAcademicaController */
/* @var $model FormacionAcademica */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idFormacionAcademica'); ?>
		<?php echo $form->textField($model,'idFormacionAcademica'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'formAcaIntensidadHoraria'); ?>
		<?php echo $form->textField($model,'formAcaIntensidadHoraria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'formAcaFechaObtencionTitulo'); ?>
		<?php echo $form->textField($model,'formAcaFechaObtencionTitulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'formAcaBecado'); ?>
		<?php echo $form->textField($model,'formAcaBecado',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'formAcaInstitucionOfreceBeca'); ?>
		<?php echo $form->textField($model,'formAcaInstitucionOfreceBeca',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'formAcaNivelFormacion'); ?>
		<?php echo $form->textField($model,'formAcaNivelFormacion',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'formAcaInstitucion'); ?>
		<?php echo $form->textField($model,'formAcaInstitucion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'formAcaProgramaAcademico'); ?>
		<?php echo $form->textField($model,'formAcaProgramaAcademico',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'formAcaFechaInicio'); ?>
		<?php echo $form->textField($model,'formAcaFechaInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'formAcaFechaFinalizacion'); ?>
		<?php echo $form->textField($model,'formAcaFechaFinalizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'formAcaTiempoFormacion'); ?>
		<?php echo $form->textField($model,'formAcaTiempoFormacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'formAcaUnidadTiempoFormacion'); ?>
		<?php echo $form->textField($model,'formAcaUnidadTiempoFormacion',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'formAcaPromedioPeriodos'); ?>
		<?php echo $form->textField($model,'formAcaPromedioPeriodos',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'formAcaCiudad_idCiudad'); ?>
		<?php echo $form->textField($model,'formAcaCiudad_idCiudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombreIdioma'); ?>
		<?php echo $form->textField($model,'nombreIdioma',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nivelEscritura'); ?>
		<?php echo $form->textField($model,'nivelEscritura',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nivelLectura'); ?>
		<?php echo $form->textField($model,'nivelLectura',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nivelHabla'); ?>
		<?php echo $form->textField($model,'nivelHabla',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nivelEscucha'); ?>
		<?php echo $form->textField($model,'nivelEscucha',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'formComTituloObtenido'); ?>
		<?php echo $form->textField($model,'formComTituloObtenido',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'formComNivelFormacion'); ?>
		<?php echo $form->textField($model,'formComNivelFormacion',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'formComInstitucion'); ?>
		<?php echo $form->textField($model,'formComInstitucion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'formComProgramaAcademico'); ?>
		<?php echo $form->textField($model,'formComProgramaAcademico',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'formComFechaInicio'); ?>
		<?php echo $form->textField($model,'formComFechaInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'formComFechaFinalizacon'); ?>
		<?php echo $form->textField($model,'formComFechaFinalizacon'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'formComTiempoFormacion'); ?>
		<?php echo $form->textField($model,'formComTiempoFormacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'formComUnidadTiempoFormacion'); ?>
		<?php echo $form->textField($model,'formComUnidadTiempoFormacion',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'formComPromedioPeriodos'); ?>
		<?php echo $form->textField($model,'formComPromedioPeriodos',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'formComCiudad_idCiudad'); ?>
		<?php echo $form->textField($model,'formComCiudad_idCiudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Persona_idPersona'); ?>
		<?php echo $form->textField($model,'Persona_idPersona'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->