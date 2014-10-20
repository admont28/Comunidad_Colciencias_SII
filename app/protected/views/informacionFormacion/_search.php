<?php
/* @var $this InformacionFormacionController */
/* @var $model InformacionFormacion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idInformacionFormacion'); ?>
		<?php echo $form->textField($model,'idInformacionFormacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nivelFormacion'); ?>
		<?php echo $form->textField($model,'nivelFormacion',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'institucion'); ?>
		<?php echo $form->textField($model,'institucion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'programaAcademico'); ?>
		<?php echo $form->textField($model,'programaAcademico',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaInicio'); ?>
		<?php echo $form->textField($model,'fechaInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaFinalizacion'); ?>
		<?php echo $form->textField($model,'fechaFinalizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tiempoFormacion'); ?>
		<?php echo $form->textField($model,'tiempoFormacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unidadTiempoFormacion'); ?>
		<?php echo $form->textField($model,'unidadTiempoFormacion',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'promedioPeriodos'); ?>
		<?php echo $form->textField($model,'promedioPeriodos',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Ciudad_idCiudad'); ?>
		<?php echo $form->textField($model,'Ciudad_idCiudad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->