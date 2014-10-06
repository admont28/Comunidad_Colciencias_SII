<?php
/* @var $this PaisController */
/* @var $model Pais */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idPais'); ?>
		<?php echo $form->textField($model,'idPais'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombrePais'); ?>
		<?php echo $form->textField($model,'nombrePais',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->