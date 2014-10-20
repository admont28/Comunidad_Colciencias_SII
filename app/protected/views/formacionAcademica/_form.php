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

	<?php echo $form->errorSummary(array($modelFormacionAcademica,$modelIdioma,$modelFormacionComplementaria)); ?>

	<div class="row">
		<?php echo $form->labelEx($modelFormacionAcademica,'intensidadHoraria'); ?>
		<?php echo $form->textField($modelFormacionAcademica,'intensidadHoraria'); ?>
		<?php echo $form->error($modelFormacionAcademica,'intensidadHoraria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelFormacionAcademica,'fechaObtencionTitulo'); ?>
		<?php echo $form->textField($modelFormacionAcademica,'fechaObtencionTitulo'); ?>
		<?php echo $form->error($modelFormacionAcademica,'fechaObtencionTitulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelFormacionAcademica,'becado'); ?>
		<?php echo $form->textField($modelFormacionAcademica,'becado',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($modelFormacionAcademica,'becado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelFormacionAcademica,'institucionOfreceBeca'); ?>
		<?php echo $form->textField($modelFormacionAcademica,'institucionOfreceBeca',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($modelFormacionAcademica,'institucionOfreceBeca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelFormacionAcademica,'InformacionFormacion_idInformacionFormacion'); ?>
		<?php echo $form->textField($modelFormacionAcademica,'InformacionFormacion_idInformacionFormacion'); ?>
		<?php echo $form->error($modelFormacionAcademica,'InformacionFormacion_idInformacionFormacion'); ?>
	</div>


	<!-- ................... IDIOMA ..............................-->

	<div class="row">
		<?php echo $form->labelEx($modelIdioma,'nombreIdioma'); ?>
		<?php echo $form->textField($modelIdioma,'nombreIdioma',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($modelIdioma,'nombreIdioma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelIdioma,'nivelEscritura'); ?>
		<?php echo $form->textField($modelIdioma,'nivelEscritura',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($modelIdioma,'nivelEscritura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelIdioma,'nivelLectura'); ?>
		<?php echo $form->textField($modelIdioma,'nivelLectura',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($modelIdioma,'nivelLectura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelIdioma,'nivelHabla'); ?>
		<?php echo $form->textField($modelIdioma,'nivelHabla',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($modelIdioma,'nivelHabla'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelIdioma,'nivelEscucha'); ?>
		<?php echo $form->textField($modelIdioma,'nivelEscucha',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($modelIdioma,'nivelEscucha'); ?>
	</div>

	<!-- ................... FORMACION COMPLEMENTARIA ..............................-->

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
		<?php echo CHtml::submitButton($modelFormacionAcademica->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->