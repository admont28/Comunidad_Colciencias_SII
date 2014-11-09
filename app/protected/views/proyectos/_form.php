<?php
/* @var $this ProyectosController */
/* @var $model Proyectos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proyectos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idProyectos'); ?>
		<?php echo $form->textField($model,'idProyectos'); ?>
		<?php echo $form->error($model,'idProyectos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreProyecto'); ?>
		<?php echo $form->textField($model,'nombreProyecto',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombreProyecto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoProyecto'); ?>
		<?php echo $form->textField($model,'tipoProyecto',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tipoProyecto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoFinanciacion'); ?>
		<?php echo $form->textField($model,'tipoFinanciacion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tipoFinanciacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fuentesFinanciacion'); ?>
		<?php echo $form->textField($model,'fuentesFinanciacion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'fuentesFinanciacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'participacionProyecto'); ?>
		<?php echo $form->textField($model,'participacionProyecto',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'participacionProyecto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'institucion'); ?>
		<?php echo $form->textField($model,'institucion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'institucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'participacionInst'); ?>
		<?php echo $form->textField($model,'participacionInst',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'participaciónInst'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valorContrapartida'); ?>
		<?php echo $form->textField($model,'valorContrapartida'); ?>
		<?php echo $form->error($model,'valorContrapartida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numeroActoAdministrativo'); ?>
		<?php echo $form->textField($model,'numeroActoAdministrativo'); ?>
		<?php echo $form->error($model,'numeroActoAdministrativo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anioInicio'); ?>
		<?php echo $form->textField($model,'anioInicio',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'anioInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mesInicio'); ?>
		<?php echo $form->textField($model,'mesInicio',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'mesInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anioFin'); ?>
		<?php echo $form->textField($model,'anioFin',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'anioFin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mesFin'); ?>
		<?php echo $form->textField($model,'mesFin',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'mesFin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resumen'); ?>
		<?php echo $form->textField($model,'resumen',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'resumen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'integrantesProyecto'); ?>
		<?php echo $form->textField($model,'integrantesProyecto',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'integrantesProyecto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'certificado'); ?>
		<?php echo $form->textField($model,'certificado',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'certificado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'institucionesVinculadas'); ?>
		<?php echo $form->textField($model,'institucionesVinculadas',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'institucionesVinculadas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'produccionCTI'); ?>
		<?php echo $form->textField($model,'produccionCTI',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'produccionCTI'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->