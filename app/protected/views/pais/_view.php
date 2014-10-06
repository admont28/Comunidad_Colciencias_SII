<?php
/* @var $this PaisController */
/* @var $data Pais */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPais')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPais), array('view', 'id'=>$data->idPais)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombrePais')); ?>:</b>
	<?php echo CHtml::encode($data->nombrePais); ?>
	<br />


</div>