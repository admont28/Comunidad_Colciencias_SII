<?php
/* @var $this InformacionFormacionController */
/* @var $data InformacionFormacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idInformacionFormacion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idInformacionFormacion), array('view', 'id'=>$data->idInformacionFormacion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivelFormacion')); ?>:</b>
	<?php echo CHtml::encode($data->nivelFormacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institucion')); ?>:</b>
	<?php echo CHtml::encode($data->institucion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('programaAcademico')); ?>:</b>
	<?php echo CHtml::encode($data->programaAcademico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaInicio')); ?>:</b>
	<?php echo CHtml::encode($data->fechaInicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaFinalizacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechaFinalizacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiempoFormacion')); ?>:</b>
	<?php echo CHtml::encode($data->tiempoFormacion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('unidadTiempoFormacion')); ?>:</b>
	<?php echo CHtml::encode($data->unidadTiempoFormacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('promedioPeriodos')); ?>:</b>
	<?php echo CHtml::encode($data->promedioPeriodos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ciudad_idCiudad')); ?>:</b>
	<?php echo CHtml::encode($data->Ciudad_idCiudad); ?>
	<br />

	*/ ?>

</div>