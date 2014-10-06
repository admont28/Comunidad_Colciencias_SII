<?php
/* @var $this FormacionAcademicaController */
/* @var $model FormacionAcademica */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idFormacionAcademica'); ?>
		<?php echo $form->textField($model,'idFormacionAcademica'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'intensidadHoraria'); ?>
		<?php echo $form->textField($model,'intensidadHoraria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaObtencionTitulo'); ?>
		<?php echo $form->textField($model,'fechaObtencionTitulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'becado'); ?>
		<?php echo $form->textField($model,'becado',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'institucionOfreceBeca'); ?>
		<?php echo $form->textField($model,'institucionOfreceBeca',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'InformacionFormacion_idInformacionFormacion'); ?>
		<?php echo $form->textField($model,'InformacionFormacion_idInformacionFormacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->