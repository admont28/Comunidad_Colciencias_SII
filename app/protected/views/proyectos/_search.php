<?php
/* @var $this ProyectosController */
/* @var $model Proyectos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idProyectos'); ?>
		<?php echo $form->textField($model,'idProyectos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombreProyecto'); ?>
		<?php echo $form->textField($model,'nombreProyecto',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipoProyecto'); ?>
		<?php echo $form->textField($model,'tipoProyecto',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipoFinanciacion'); ?>
		<?php echo $form->textField($model,'tipoFinanciacion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fuentesFinanciacion'); ?>
		<?php echo $form->textField($model,'fuentesFinanciacion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'participacionProyecto'); ?>
		<?php echo $form->textField($model,'participacionProyecto',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'institucion'); ?>
		<?php echo $form->textField($model,'institucion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'participacionInst'); ?>
		<?php echo $form->textField($model,'participacionInst',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valorContrapartida'); ?>
		<?php echo $form->textField($model,'valorContrapartida'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numeroActoAdministrativo'); ?>
		<?php echo $form->textField($model,'numeroActoAdministrativo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anioInicio'); ?>
		<?php echo $form->textField($model,'anioInicio',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mesInicio'); ?>
		<?php echo $form->textField($model,'mesInicio',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anioFin'); ?>
		<?php echo $form->textField($model,'anioFin',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mesFin'); ?>
		<?php echo $form->textField($model,'mesFin',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'resumen'); ?>
		<?php echo $form->textField($model,'resumen',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'integrantesProyecto'); ?>
		<?php echo $form->textField($model,'integrantesProyecto',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'certificado'); ?>
		<?php echo $form->textField($model,'certificado',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'institucionesVinculadas'); ?>
		<?php echo $form->textField($model,'institucionesVinculadas',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'produccionCTI'); ?>
		<?php echo $form->textField($model,'produccionCTI',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->