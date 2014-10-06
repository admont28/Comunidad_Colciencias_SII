<?php
/* @var $this DepartamentoController */
/* @var $model Departamento */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idDepartamento'); ?>
		<?php echo $form->textField($model,'idDepartamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombreDepartamento'); ?>
		<?php echo $form->textField($model,'nombreDepartamento',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Pais_idPais'); ?>
		<?php echo $form->textField($model,'Pais_idPais'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->