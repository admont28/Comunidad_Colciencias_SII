<?php
/* @var $this FormacionAcademicaController */
/* @var $data FormacionAcademica */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idFormacionAcademica')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idFormacionAcademica), array('view', 'id'=>$data->idFormacionAcademica)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('formAcaIntensidadHoraria')); ?>:</b>
	<?php echo CHtml::encode($data->formAcaIntensidadHoraria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('formAcaFechaObtencionTitulo')); ?>:</b>
	<?php echo CHtml::encode($data->formAcaFechaObtencionTitulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('formAcaBecado')); ?>:</b>
	<?php echo CHtml::encode($data->formAcaBecado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('formAcaInstitucionOfreceBeca')); ?>:</b>
	<?php echo CHtml::encode($data->formAcaInstitucionOfreceBeca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('formAcaNivelFormacion')); ?>:</b>
	<?php echo CHtml::encode($data->formAcaNivelFormacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('formAcaInstitucion')); ?>:</b>
	<?php echo CHtml::encode($data->formAcaInstitucion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('formAcaProgramaAcademico')); ?>:</b>
	<?php echo CHtml::encode($data->formAcaProgramaAcademico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('formAcaFechaInicio')); ?>:</b>
	<?php echo CHtml::encode($data->formAcaFechaInicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('formAcaFechaFinalizacion')); ?>:</b>
	<?php echo CHtml::encode($data->formAcaFechaFinalizacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('formAcaTiempoFormacion')); ?>:</b>
	<?php echo CHtml::encode($data->formAcaTiempoFormacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('formAcaUnidadTiempoFormacion')); ?>:</b>
	<?php echo CHtml::encode($data->formAcaUnidadTiempoFormacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('formAcaPromedioPeriodos')); ?>:</b>
	<?php echo CHtml::encode($data->formAcaPromedioPeriodos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('formAcaCiudad_idCiudad')); ?>:</b>
	<?php echo CHtml::encode($data->formAcaCiudad_idCiudad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreIdioma')); ?>:</b>
	<?php echo CHtml::encode($data->nombreIdioma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivelEscritura')); ?>:</b>
	<?php echo CHtml::encode($data->nivelEscritura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivelLectura')); ?>:</b>
	<?php echo CHtml::encode($data->nivelLectura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivelHabla')); ?>:</b>
	<?php echo CHtml::encode($data->nivelHabla); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivelEscucha')); ?>:</b>
	<?php echo CHtml::encode($data->nivelEscucha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('formComTituloObtenido')); ?>:</b>
	<?php echo CHtml::encode($data->formComTituloObtenido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('formComNivelFormacion')); ?>:</b>
	<?php echo CHtml::encode($data->formComNivelFormacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('formComInstitucion')); ?>:</b>
	<?php echo CHtml::encode($data->formComInstitucion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('formComProgramaAcademico')); ?>:</b>
	<?php echo CHtml::encode($data->formComProgramaAcademico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('formComFechaInicio')); ?>:</b>
	<?php echo CHtml::encode($data->formComFechaInicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('formComFechaFinalizacon')); ?>:</b>
	<?php echo CHtml::encode($data->formComFechaFinalizacon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('formComTiempoFormacion')); ?>:</b>
	<?php echo CHtml::encode($data->formComTiempoFormacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('formComUnidadTiempoFormacion')); ?>:</b>
	<?php echo CHtml::encode($data->formComUnidadTiempoFormacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('formComPromedioPeriodos')); ?>:</b>
	<?php echo CHtml::encode($data->formComPromedioPeriodos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('formComCiudad_idCiudad')); ?>:</b>
	<?php echo CHtml::encode($data->formComCiudad_idCiudad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Persona_idPersona')); ?>:</b>
	<?php echo CHtml::encode($data->Persona_idPersona); ?>
	<br />

	*/ ?>

</div>