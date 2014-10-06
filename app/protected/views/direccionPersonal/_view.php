<?php
/* @var $this DireccionPersonalController */
/* @var $data DireccionPersonal */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idDireccionPersonal')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idDireccionPersonal), array('view', 'id'=>$data->idDireccionPersonal)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('barrio')); ?>:</b>
	<?php echo CHtml::encode($data->barrio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigoPostal')); ?>:</b>
	<?php echo CHtml::encode($data->codigoPostal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ciudad_idCiudad')); ?>:</b>
	<?php echo CHtml::encode($data->Ciudad_idCiudad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefonoFijo')); ?>:</b>
	<?php echo CHtml::encode($data->telefonoFijo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefonoMovil')); ?>:</b>
	<?php echo CHtml::encode($data->telefonoMovil); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('apartadoPostal')); ?>:</b>
	<?php echo CHtml::encode($data->apartadoPostal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sitioWeb')); ?>:</b>
	<?php echo CHtml::encode($data->sitioWeb); ?>
	<br />

	*/ ?>

</div>