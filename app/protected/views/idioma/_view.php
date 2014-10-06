<?php
/* @var $this IdiomaController */
/* @var $data Idioma */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idIdioma')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idIdioma), array('view', 'id'=>$data->idIdioma)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreIdioma')); ?>:</b>
	<?php echo CHtml::encode($data->nombreIdioma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivelEscritura')); ?>:</b>
	<?php echo CHtml::encode($data->nivelEscritura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivelLectura')); ?>:</b>
	<?php echo CHtml::encode($data->nivelLectura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivelHabla')); ?>:</b>
	<?php echo CHtml::encode($data->nivelHabla); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivelEscucha')); ?>:</b>
	<?php echo CHtml::encode($data->nivelEscucha); ?>
	<br />


</div>