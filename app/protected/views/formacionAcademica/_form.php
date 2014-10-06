<?php
/* @var $this FormacionAcademicaController */
/* @var $model FormacionAcademica */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'formacion-academica-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'intensidadHoraria'); ?>
		<?php echo $form->textField($model,'intensidadHoraria'); ?>
		<?php echo $form->error($model,'intensidadHoraria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaObtencionTitulo'); ?>
		<?php echo $form->textField($model,'fechaObtencionTitulo'); ?>
		<?php echo $form->error($model,'fechaObtencionTitulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'becado'); ?>
		<?php echo $form->textField($model,'becado',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'becado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'institucionOfreceBeca'); ?>
		<?php echo $form->textField($model,'institucionOfreceBeca',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'institucionOfreceBeca'); ?>
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