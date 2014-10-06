<?php
/* @var $this CiudadController */
/* @var $data Ciudad */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCiudad')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idCiudad), array('view', 'id'=>$data->idCiudad)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreCiudad')); ?>:</b>
	<?php echo CHtml::encode($data->nombreCiudad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Departamento_idDepartamento')); ?>:</b>
	<?php echo CHtml::encode($data->Departamento_idDepartamento); ?>
	<br />


</div>