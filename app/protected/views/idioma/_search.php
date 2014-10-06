<?php
/* @var $this IdiomaController */
/* @var $model Idioma */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idIdioma'); ?>
		<?php echo $form->textField($model,'idIdioma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombreIdioma'); ?>
		<?php echo $form->textField($model,'nombreIdioma',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nivelEscritura'); ?>
		<?php echo $form->textField($model,'nivelEscritura',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nivelLectura'); ?>
		<?php echo $form->textField($model,'nivelLectura',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nivelHabla'); ?>
		<?php echo $form->textField($model,'nivelHabla',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nivelEscucha'); ?>
		<?php echo $form->textField($model,'nivelEscucha',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->