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
		<?php echo $form->label($model,'dirProInstitucion'); ?>
		<?php echo $form->textField($model,'dirProInstitucion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dirProDireccionInstitucion'); ?>
		<?php echo $form->textField($model,'dirProDireccionInstitucion',array('size'=>35,'maxlength'=>35)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dirProBarrio'); ?>
		<?php echo $form->textField($model,'dirProBarrio',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dirProCodigoPostal'); ?>
		<?php echo $form->textField($model,'dirProCodigoPostal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dirProApartadoPostal'); ?>
		<?php echo $form->textField($model,'dirProApartadoPostal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dirProTelefonoFijo'); ?>
		<?php echo $form->textField($model,'dirProTelefonoFijo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dirProExtension'); ?>
		<?php echo $form->textField($model,'dirProExtension'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dirProEmailInstitucional'); ?>
		<?php echo $form->textField($model,'dirProEmailInstitucional',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dirProPaginaInstitucional'); ?>
		<?php echo $form->textField($model,'dirProPaginaInstitucional',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dirProCiudad_idCiudad'); ?>
		<?php echo $form->textField($model,'dirProCiudad_idCiudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dirPerDireccion'); ?>
		<?php echo $form->textField($model,'dirPerDireccion',array('size'=>35,'maxlength'=>35)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dirPerBarrio'); ?>
		<?php echo $form->textField($model,'dirPerBarrio',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dirPerCodigoPostal'); ?>
		<?php echo $form->textField($model,'dirPerCodigoPostal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dirPerTelefonoFijo'); ?>
		<?php echo $form->textField($model,'dirPerTelefonoFijo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dirPerTelefonoMovil'); ?>
		<?php echo $form->textField($model,'dirPerTelefonoMovil'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dirPerApartadoPostal'); ?>
		<?php echo $form->textField($model,'dirPerApartadoPostal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dirPerEmail'); ?>
		<?php echo $form->textField($model,'dirPerEmail',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dirPerSitioWeb'); ?>
		<?php echo $form->textField($model,'dirPerSitioWeb',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dirPerCiudad_idCiudad'); ?>
		<?php echo $form->textField($model,'dirPerCiudad_idCiudad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->