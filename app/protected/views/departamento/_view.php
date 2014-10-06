<?php
/* @var $this DepartamentoController */
/* @var $data Departamento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idDepartamento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idDepartamento), array('view', 'id'=>$data->idDepartamento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreDepartamento')); ?>:</b>
	<?php echo CHtml::encode($data->nombreDepartamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Pais_idPais')); ?>:</b>
	<?php echo CHtml::encode($data->Pais_idPais); ?>
	<br />


</div>