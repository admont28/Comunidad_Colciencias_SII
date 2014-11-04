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

	<b><?php echo CHtml::encode($data->getAttributeLabel('dirProInstitucion')); ?>:</b>
	<?php echo CHtml::encode($data->dirProInstitucion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dirProDireccionInstitucion')); ?>:</b>
	<?php echo CHtml::encode($data->dirProDireccionInstitucion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dirProBarrio')); ?>:</b>
	<?php echo CHtml::encode($data->dirProBarrio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dirProCodigoPostal')); ?>:</b>
	<?php echo CHtml::encode($data->dirProCodigoPostal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dirProApartadoPostal')); ?>:</b>
	<?php echo CHtml::encode($data->dirProApartadoPostal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dirProTelefonoFijo')); ?>:</b>
	<?php echo CHtml::encode($data->dirProTelefonoFijo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dirProExtension')); ?>:</b>
	<?php echo CHtml::encode($data->dirProExtension); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dirProEmailInstitucional')); ?>:</b>
	<?php echo CHtml::encode($data->dirProEmailInstitucional); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dirProPaginaInstitucional')); ?>:</b>
	<?php echo CHtml::encode($data->dirProPaginaInstitucional); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dirProCiudad_idCiudad')); ?>:</b>
	<?php echo CHtml::encode($data->dirProCiudad_idCiudad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dirPerDireccion')); ?>:</b>
	<?php echo CHtml::encode($data->dirPerDireccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dirPerBarrio')); ?>:</b>
	<?php echo CHtml::encode($data->dirPerBarrio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dirPerCodigoPostal')); ?>:</b>
	<?php echo CHtml::encode($data->dirPerCodigoPostal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dirPerTelefonoFijo')); ?>:</b>
	<?php echo CHtml::encode($data->dirPerTelefonoFijo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dirPerTelefonoMovil')); ?>:</b>
	<?php echo CHtml::encode($data->dirPerTelefonoMovil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dirPerApartadoPostal')); ?>:</b>
	<?php echo CHtml::encode($data->dirPerApartadoPostal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dirPerEmail')); ?>:</b>
	<?php echo CHtml::encode($data->dirPerEmail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dirPerSitioWeb')); ?>:</b>
	<?php echo CHtml::encode($data->dirPerSitioWeb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dirPerCiudad_idCiudad')); ?>:</b>
	<?php echo CHtml::encode($data->dirPerCiudad_idCiudad); ?>
	<br />

	*/ ?>

</div>