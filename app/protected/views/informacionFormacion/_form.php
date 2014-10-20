<?php
/* @var $this InformacionFormacionController */
/* @var $model InformacionFormacion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'informacion-formacion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nivelFormacion'); ?>
		<?php echo $form->textField($model,'nivelFormacion',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'nivelFormacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'institucion'); ?>
		<?php echo $form->textField($model,'institucion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'institucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'programaAcademico'); ?>
		<?php echo $form->textField($model,'programaAcademico',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'programaAcademico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaInicio'); ?>
		<?php echo $form->textField($model,'fechaInicio'); ?>
		<?php echo $form->error($model,'fechaInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaFinalizacion'); ?>
		<?php echo $form->textField($model,'fechaFinalizacion'); ?>
		<?php echo $form->error($model,'fechaFinalizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tiempoFormacion'); ?>
		<?php echo $form->textField($model,'tiempoFormacion'); ?>
		<?php echo $form->error($model,'tiempoFormacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unidadTiempoFormacion'); ?>
		<?php echo $form->textField($model,'unidadTiempoFormacion',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'unidadTiempoFormacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'promedioPeriodos'); ?>
		<?php echo $form->textField($model,'promedioPeriodos',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'promedioPeriodos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ciudad_idCiudad'); ?>
		<?php echo $form->textField($model,'Ciudad_idCiudad'); ?>
		<?php echo $form->error($model,'Ciudad_idCiudad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->