<?php
/* @var $this ProyectosController */
/* @var $model Persona */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget("CActiveForm",array("action"=>Yii::app()->createUrl("proyectos/view"))); ?>
					<?php echo $form->textField($modelParticipantes,'idParticipante'); ?>
					<?php echo $form->error($modelParticipantes,'idParticipante'); ?>
					<?php echo CHtml::submitButton("Agregar")?>
<?php $this->endWidget();?>

</div><!-- form -->