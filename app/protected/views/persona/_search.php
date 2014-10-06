<?php
/* @var $this PersonaController */
/* @var $model Persona */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idPersona'); ?>
		<?php echo $form->textField($model,'idPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cedulaPersona'); ?>
		<?php echo $form->textField($model,'cedulaPersona',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombrePersona'); ?>
		<?php echo $form->textField($model,'nombrePersona',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'primerApellidoPersona'); ?>
		<?php echo $form->textField($model,'primerApellidoPersona',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'segundoApellidoPersona'); ?>
		<?php echo $form->textField($model,'segundoApellidoPersona',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombreCitasBliblioPersona'); ?>
		<?php echo $form->textField($model,'nombreCitasBliblioPersona',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipoDocumentoPersona'); ?>
		<?php echo $form->textField($model,'tipoDocumentoPersona',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nacionalidadPais_idPais'); ?>
		<?php echo $form->textField($model,'nacionalidadPais_idPais'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'expediciónPais_idPais'); ?>
		<?php echo $form->textField($model,'expediciónPais_idPais'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaExpedicionDoc'); ?>
		<?php echo $form->textField($model,'fechaExpedicionDoc',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sexoPersona'); ?>
		<?php echo $form->textField($model,'sexoPersona',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nacimientoCiudad_idCiudad'); ?>
		<?php echo $form->textField($model,'nacimientoCiudad_idCiudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaNacimientoPersona'); ?>
		<?php echo $form->textField($model,'fechaNacimientoPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuarioSIICPersona'); ?>
		<?php echo $form->textField($model,'usuarioSIICPersona',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contraseñaSIICPersona'); ?>
		<?php echo $form->textField($model,'contraseñaSIICPersona',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estadoCivilPersona'); ?>
		<?php echo $form->textField($model,'estadoCivilPersona',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DireccionPersonal_idDireccionPersonal'); ?>
		<?php echo $form->textField($model,'DireccionPersonal_idDireccionPersonal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DireccionProfesional_idDireccionProfesional'); ?>
		<?php echo $form->textField($model,'DireccionProfesional_idDireccionProfesional'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FormacionAcademica_idFormacionAcademica'); ?>
		<?php echo $form->textField($model,'FormacionAcademica_idFormacionAcademica'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Idioma_idIdioma'); ?>
		<?php echo $form->textField($model,'Idioma_idIdioma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FormacionComplementaria_idFormacionComplementaria'); ?>
		<?php echo $form->textField($model,'FormacionComplementaria_idFormacionComplementaria'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->