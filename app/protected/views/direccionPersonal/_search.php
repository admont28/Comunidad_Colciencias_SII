<?php
/* @var $this DireccionPersonalController */
/* @var $model DireccionPersonal */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idDireccionPersonal'); ?>
		<?php echo $form->textField($model,'idDireccionPersonal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>35,'maxlength'=>35)); ?>
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
		<?php echo $form->label($model,'Ciudad_idCiudad'); ?>
		<?php echo $form->textField($model,'Ciudad_idCiudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefonoFijo'); ?>
		<?php echo $form->textField($model,'telefonoFijo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefonoMovil'); ?>
		<?php echo $form->textField($model,'telefonoMovil'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apartadoPostal'); ?>
		<?php echo $form->textField($model,'apartadoPostal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sitioWeb'); ?>
		<?php echo $form->textField($model,'sitioWeb',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->