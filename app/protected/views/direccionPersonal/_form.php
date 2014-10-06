<?php
/* @var $this DireccionPersonalController */
/* @var $model DireccionPersonal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'direccion-personal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idDireccionPersonal'); ?>
		<?php echo $form->textField($model,'idDireccionPersonal'); ?>
		<?php echo $form->error($model,'idDireccionPersonal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'barrio'); ?>
		<?php echo $form->textField($model,'barrio',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'barrio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigoPostal'); ?>
		<?php echo $form->textField($model,'codigoPostal'); ?>
		<?php echo $form->error($model,'codigoPostal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ciudad_idCiudad'); ?>
		<?php echo $form->textField($model,'Ciudad_idCiudad'); ?>
		<?php echo $form->error($model,'Ciudad_idCiudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefonoFijo'); ?>
		<?php echo $form->textField($model,'telefonoFijo'); ?>
		<?php echo $form->error($model,'telefonoFijo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefonoMovil'); ?>
		<?php echo $form->textField($model,'telefonoMovil'); ?>
		<?php echo $form->error($model,'telefonoMovil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apartadoPostal'); ?>
		<?php echo $form->textField($model,'apartadoPostal'); ?>
		<?php echo $form->error($model,'apartadoPostal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sitioWeb'); ?>
		<?php echo $form->textField($model,'sitioWeb',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'sitioWeb'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->