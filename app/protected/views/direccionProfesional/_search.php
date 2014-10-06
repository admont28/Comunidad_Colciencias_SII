<?php
/* @var $this DireccionProfesionalController */
/* @var $model DireccionProfesional */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idDireccionProfesional'); ?>
		<?php echo $form->textField($model,'idDireccionProfesional'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'institucion'); ?>
		<?php echo $form->textField($model,'institucion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccionInstitucion'); ?>
		<?php echo $form->textField($model,'direccionInstitucion',array('size'=>35,'maxlength'=>35)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'barrio'); ?>
		<?php echo $form->textField($model,'barrio',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigoPostal'); ?>
		<?php echo $form->textField($model,'codigoPostal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apartadoPostal'); ?>
		<?php echo $form->textField($model,'apartadoPostal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Ciudad_idCiudad'); ?>
		<?php echo $form->textField($model,'Ciudad_idCiudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefonoFijo'); ?>
		<?php echo $form->textField($model,'telefonoFijo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'extension'); ?>
		<?php echo $form->textField($model,'extension'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emailInstitucional'); ?>
		<?php echo $form->textField($model,'emailInstitucional',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paginaInstitucional'); ?>
		<?php echo $form->textField($model,'paginaInstitucional',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->