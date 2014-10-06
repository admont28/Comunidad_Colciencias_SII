<?php
/* @var $this PersonaController */
/* @var $model Persona */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'persona-Persona-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cedulaPersona'); ?>
		<?php echo $form->textField($model,'cedulaPersona'); ?>
		<?php echo $form->error($model,'cedulaPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombrePersona'); ?>
		<?php echo $form->textField($model,'nombrePersona'); ?>
		<?php echo $form->error($model,'nombrePersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'primerApellidoPersona'); ?>
		<?php echo $form->textField($model,'primerApellidoPersona'); ?>
		<?php echo $form->error($model,'primerApellidoPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoDocumentoPersona'); ?>
		<?php echo $form->textField($model,'tipoDocumentoPersona'); ?>
		<?php echo $form->error($model,'tipoDocumentoPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nacionalidadPais_idPais'); ?>
		<?php echo $form->textField($model,'nacionalidadPais_idPais'); ?>
		<?php echo $form->error($model,'nacionalidadPais_idPais'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'expediciónPais_idPais'); ?>
		<?php echo $form->textField($model,'expediciónPais_idPais'); ?>
		<?php echo $form->error($model,'expediciónPais_idPais'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaExpedicionDoc'); ?>
		<?php echo $form->textField($model,'fechaExpedicionDoc'); ?>
		<?php echo $form->error($model,'fechaExpedicionDoc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sexoPersona'); ?>
		<?php echo $form->textField($model,'sexoPersona'); ?>
		<?php echo $form->error($model,'sexoPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nacimientoCiudad_idCiudad'); ?>
		<?php echo $form->textField($model,'nacimientoCiudad_idCiudad'); ?>
		<?php echo $form->error($model,'nacimientoCiudad_idCiudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaNacimientoPersona'); ?>
		<?php echo $form->textField($model,'fechaNacimientoPersona'); ?>
		<?php echo $form->error($model,'fechaNacimientoPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuarioSIICPersona'); ?>
		<?php echo $form->textField($model,'usuarioSIICPersona'); ?>
		<?php echo $form->error($model,'usuarioSIICPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contraseñaSIICPersona'); ?>
		<?php echo $form->textField($model,'contraseñaSIICPersona'); ?>
		<?php echo $form->error($model,'contraseñaSIICPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DireccionPersonal_idDireccionPersonal'); ?>
		<?php echo $form->textField($model,'DireccionPersonal_idDireccionPersonal'); ?>
		<?php echo $form->error($model,'DireccionPersonal_idDireccionPersonal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DireccionProfesional_idDireccionProfesional'); ?>
		<?php echo $form->textField($model,'DireccionProfesional_idDireccionProfesional'); ?>
		<?php echo $form->error($model,'DireccionProfesional_idDireccionProfesional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FormacionAcademica_idFormacionAcademica'); ?>
		<?php echo $form->textField($model,'FormacionAcademica_idFormacionAcademica'); ?>
		<?php echo $form->error($model,'FormacionAcademica_idFormacionAcademica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Idioma_idIdioma'); ?>
		<?php echo $form->textField($model,'Idioma_idIdioma'); ?>
		<?php echo $form->error($model,'Idioma_idIdioma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FormacionComplementaria_idFormacionComplementaria'); ?>
		<?php echo $form->textField($model,'FormacionComplementaria_idFormacionComplementaria'); ?>
		<?php echo $form->error($model,'FormacionComplementaria_idFormacionComplementaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'segundoApellidoPersona'); ?>
		<?php echo $form->textField($model,'segundoApellidoPersona'); ?>
		<?php echo $form->error($model,'segundoApellidoPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreCitasBliblioPersona'); ?>
		<?php echo $form->textField($model,'nombreCitasBliblioPersona'); ?>
		<?php echo $form->error($model,'nombreCitasBliblioPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estadoCivilPersona'); ?>
		<?php echo $form->textField($model,'estadoCivilPersona'); ?>
		<?php echo $form->error($model,'estadoCivilPersona'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->