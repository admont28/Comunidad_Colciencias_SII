<?php
/* @var $this FormacionComplementariaController */
/* @var $model FormacionComplementaria */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idFormacionComplementaria'); ?>
		<?php echo $form->textField($model,'idFormacionComplementaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tituloObtenido'); ?>
		<?php echo $form->textField($model,'tituloObtenido',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'InformacionFormacion_idInformacionFormacion'); ?>
		<?php echo $form->textField($model,'InformacionFormacion_idInformacionFormacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->