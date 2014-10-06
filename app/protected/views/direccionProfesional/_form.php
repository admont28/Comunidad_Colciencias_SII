<?php
/* @var $this DireccionProfesionalController */
/* @var $modelDireccionProfesional DireccionProfesional */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'direccion-profesional-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($modelDireccionProfesional); ?>

	<div class="row">
		<?php echo $form->labelEx($modelDireccionProfesional,'idDireccionProfesional'); ?>
		<?php echo $form->textField($modelDireccionProfesional,'idDireccionProfesional'); ?>
		<?php echo $form->error($modelDireccionProfesional,'idDireccionProfesional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelDireccionProfesional,'institucion'); ?>
		<?php echo $form->textField($modelDireccionProfesional,'institucion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($modelDireccionProfesional,'institucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelDireccionProfesional,'direccionInstitucion'); ?>
		<?php echo $form->textField($modelDireccionProfesional,'direccionInstitucion',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($modelDireccionProfesional,'direccionInstitucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelDireccionProfesional,'barrio'); ?>
		<?php echo $form->textField($modelDireccionProfesional,'barrio',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($modelDireccionProfesional,'barrio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelDireccionProfesional,'codigoPostal'); ?>
		<?php echo $form->textField($modelDireccionProfesional,'codigoPostal'); ?>
		<?php echo $form->error($modelDireccionProfesional,'codigoPostal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelDireccionProfesional,'apartadoPostal'); ?>
		<?php echo $form->textField($modelDireccionProfesional,'apartadoPostal'); ?>
		<?php echo $form->error($modelDireccionProfesional,'apartadoPostal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelDireccionProfesional,'Ciudad_idCiudad'); ?>
		<?php echo $form->textField($modelDireccionProfesional,'Ciudad_idCiudad'); ?>
		<?php echo $form->error($modelDireccionProfesional,'Ciudad_idCiudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelDireccionProfesional,'telefonoFijo'); ?>
		<?php echo $form->textField($modelDireccionProfesional,'telefonoFijo'); ?>
		<?php echo $form->error($modelDireccionProfesional,'telefonoFijo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelDireccionProfesional,'extension'); ?>
		<?php echo $form->textField($modelDireccionProfesional,'extension'); ?>
		<?php echo $form->error($modelDireccionProfesional,'extension'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelDireccionProfesional,'emailInstitucional'); ?>
		<?php echo $form->textField($modelDireccionProfesional,'emailInstitucional',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($modelDireccionProfesional,'emailInstitucional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelDireccionProfesional,'paginaInstitucional'); ?>
		<?php echo $form->textField($modelDireccionProfesional,'paginaInstitucional',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($modelDireccionProfesional,'paginaInstitucional'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($modelDireccionProfesional->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->