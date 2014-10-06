<?php
/* @var $this CiudadController */
/* @var $model Ciudad */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idCiudad'); ?>
		<?php echo $form->textField($model,'idCiudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombreCiudad'); ?>
		<?php echo $form->textField($model,'nombreCiudad',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Departamento_idDepartamento'); ?>
		<?php echo $form->textField($model,'Departamento_idDepartamento'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->