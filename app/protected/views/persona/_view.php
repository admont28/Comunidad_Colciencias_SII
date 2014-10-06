<?php
/* @var $this PersonaController */
/* @var $data Persona */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPersona')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPersona), array('view', 'id'=>$data->idPersona)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedulaPersona')); ?>:</b>
	<?php echo CHtml::encode($data->cedulaPersona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombrePersona')); ?>:</b>
	<?php echo CHtml::encode($data->nombrePersona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primerApellidoPersona')); ?>:</b>
	<?php echo CHtml::encode($data->primerApellidoPersona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('segundoApellidoPersona')); ?>:</b>
	<?php echo CHtml::encode($data->segundoApellidoPersona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreCitasBliblioPersona')); ?>:</b>
	<?php echo CHtml::encode($data->nombreCitasBliblioPersona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoDocumentoPersona')); ?>:</b>
	<?php echo CHtml::encode($data->tipoDocumentoPersona); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nacionalidadPais_idPais')); ?>:</b>
	<?php echo CHtml::encode($data->nacionalidadPais_idPais); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expediciónPais_idPais')); ?>:</b>
	<?php echo CHtml::encode($data->expediciónPais_idPais); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaExpedicionDoc')); ?>:</b>
	<?php echo CHtml::encode($data->fechaExpedicionDoc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sexoPersona')); ?>:</b>
	<?php echo CHtml::encode($data->sexoPersona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nacimientoCiudad_idCiudad')); ?>:</b>
	<?php echo CHtml::encode($data->nacimientoCiudad_idCiudad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaNacimientoPersona')); ?>:</b>
	<?php echo CHtml::encode($data->fechaNacimientoPersona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarioSIICPersona')); ?>:</b>
	<?php echo CHtml::encode($data->usuarioSIICPersona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contraseñaSIICPersona')); ?>:</b>
	<?php echo CHtml::encode($data->contraseñaSIICPersona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estadoCivilPersona')); ?>:</b>
	<?php echo CHtml::encode($data->estadoCivilPersona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DireccionPersonal_idDireccionPersonal')); ?>:</b>
	<?php echo CHtml::encode($data->DireccionPersonal_idDireccionPersonal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DireccionProfesional_idDireccionProfesional')); ?>:</b>
	<?php echo CHtml::encode($data->DireccionProfesional_idDireccionProfesional); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FormacionAcademica_idFormacionAcademica')); ?>:</b>
	<?php echo CHtml::encode($data->FormacionAcademica_idFormacionAcademica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Idioma_idIdioma')); ?>:</b>
	<?php echo CHtml::encode($data->Idioma_idIdioma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FormacionComplementaria_idFormacionComplementaria')); ?>:</b>
	<?php echo CHtml::encode($data->FormacionComplementaria_idFormacionComplementaria); ?>
	<br />

	*/ ?>

</div>