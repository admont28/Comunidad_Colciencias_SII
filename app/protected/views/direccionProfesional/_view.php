<?php
/* @var $this DireccionProfesionalController */
/* @var $data DireccionProfesional */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idDireccionProfesional')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idDireccionProfesional), array('view', 'id'=>$data->idDireccionProfesional)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institucion')); ?>:</b>
	<?php echo CHtml::encode($data->institucion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccionInstitucion')); ?>:</b>
	<?php echo CHtml::encode($data->direccionInstitucion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('barrio')); ?>:</b>
	<?php echo CHtml::encode($data->barrio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigoPostal')); ?>:</b>
	<?php echo CHtml::encode($data->codigoPostal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apartadoPostal')); ?>:</b>
	<?php echo CHtml::encode($data->apartadoPostal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ciudad_idCiudad')); ?>:</b>
	<?php echo CHtml::encode($data->Ciudad_idCiudad); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('telefonoFijo')); ?>:</b>
	<?php echo CHtml::encode($data->telefonoFijo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('extension')); ?>:</b>
	<?php echo CHtml::encode($data->extension); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emailInstitucional')); ?>:</b>
	<?php echo CHtml::encode($data->emailInstitucional); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paginaInstitucional')); ?>:</b>
	<?php echo CHtml::encode($data->paginaInstitucional); ?>
	<br />

	*/ ?>

</div>