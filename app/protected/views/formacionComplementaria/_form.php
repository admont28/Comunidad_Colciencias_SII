<?php
/* @var $this FormacionComplementariaController */
/* @var $model FormacionComplementaria */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'formacion-complementaria-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tituloObtenido'); ?>
		<?php echo $form->textField($model,'tituloObtenido',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'tituloObtenido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'InformacionFormacion_idInformacionFormacion'); ?>
		<?php echo $form->textField($model,'InformacionFormacion_idInformacionFormacion'); ?>
		<?php echo $form->error($model,'InformacionFormacion_idInformacionFormacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->