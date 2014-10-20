<?php
/* @var $this IdiomaController */
/* @var $model Idioma */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'idioma-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreIdioma'); ?>
		<?php echo $form->textField($model,'nombreIdioma',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombreIdioma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nivelEscritura'); ?>
		<?php echo $form->textField($model,'nivelEscritura',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'nivelEscritura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nivelLectura'); ?>
		<?php echo $form->textField($model,'nivelLectura',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'nivelLectura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nivelHabla'); ?>
		<?php echo $form->textField($model,'nivelHabla',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'nivelHabla'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nivelEscucha'); ?>
		<?php echo $form->textField($model,'nivelEscucha',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'nivelEscucha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->