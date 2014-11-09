<?php
/* @var $this ProyectosController */
/* @var $data Proyectos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProyectos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idProyectos), array('view', 'id'=>$data->idProyectos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreProyecto')); ?>:</b>
	<?php echo CHtml::encode($data->nombreProyecto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoProyecto')); ?>:</b>
	<?php echo CHtml::encode($data->tipoProyecto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoFinanciacion')); ?>:</b>
	<?php echo CHtml::encode($data->tipoFinanciacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fuentesFinanciacion')); ?>:</b>
	<?php echo CHtml::encode($data->fuentesFinanciacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('participacionProyecto')); ?>:</b>
	<?php echo CHtml::encode($data->participacionProyecto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institucion')); ?>:</b>
	<?php echo CHtml::encode($data->institucion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('participaciónInst')); ?>:</b>
	<?php echo CHtml::encode($data->participaciónInst); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valorContrapartida')); ?>:</b>
	<?php echo CHtml::encode($data->valorContrapartida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numeroActoAdministrativo')); ?>:</b>
	<?php echo CHtml::encode($data->numeroActoAdministrativo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anioInicio')); ?>:</b>
	<?php echo CHtml::encode($data->anioInicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mesInicio')); ?>:</b>
	<?php echo CHtml::encode($data->mesInicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anioFin')); ?>:</b>
	<?php echo CHtml::encode($data->anioFin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mesFin')); ?>:</b>
	<?php echo CHtml::encode($data->mesFin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resumen')); ?>:</b>
	<?php echo CHtml::encode($data->resumen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('integrantesProyecto')); ?>:</b>
	<?php echo CHtml::encode($data->integrantesProyecto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('certificado')); ?>:</b>
	<?php echo CHtml::encode($data->certificado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institucionesVinculadas')); ?>:</b>
	<?php echo CHtml::encode($data->institucionesVinculadas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('producciónCTI')); ?>:</b>
	<?php echo CHtml::encode($data->producciónCTI); ?>
	<br />

	*/ ?>

</div>