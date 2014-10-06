<?php
/* @var $this FormacionComplementariaController */
/* @var $data FormacionComplementaria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idFormacionComplementaria')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idFormacionComplementaria), array('view', 'id'=>$data->idFormacionComplementaria)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tituloObtenido')); ?>:</b>
	<?php echo CHtml::encode($data->tituloObtenido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InformacionFormacion_idInformacionFormacion')); ?>:</b>
	<?php echo CHtml::encode($data->InformacionFormacion_idInformacionFormacion); ?>
	<br />


</div>