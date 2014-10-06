<?php
/* @var $this FormacionAcademicaController */
/* @var $data FormacionAcademica */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idFormacionAcademica')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idFormacionAcademica), array('view', 'id'=>$data->idFormacionAcademica)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('intensidadHoraria')); ?>:</b>
	<?php echo CHtml::encode($data->intensidadHoraria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaObtencionTitulo')); ?>:</b>
	<?php echo CHtml::encode($data->fechaObtencionTitulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('becado')); ?>:</b>
	<?php echo CHtml::encode($data->becado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institucionOfreceBeca')); ?>:</b>
	<?php echo CHtml::encode($data->institucionOfreceBeca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InformacionFormacion_idInformacionFormacion')); ?>:</b>
	<?php echo CHtml::encode($data->InformacionFormacion_idInformacionFormacion); ?>
	<br />


</div>