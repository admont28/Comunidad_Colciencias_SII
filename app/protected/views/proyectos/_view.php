<?php
/* @var $this ProyectosController */
/* @var $model Proyectos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proyectos-form',
	'enableClientValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary(array($model,$modelParticipantes)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreProyecto'); ?>
		<?php echo $form->textField($model,'nombreProyecto',array('size'=>60,'maxlength'=>100, 'style'=>'border-radius: 7px;  border-style: dotted; border-color: rgb(211,211,211);', 'readonly'=>'readonly')); ?>
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


	
	<div class="row">
		<?php $form=$this->beginWidget("CActiveForm",array("action"=>Yii::app()->createUrl("proyectos/view"))); ?>
					<?php 
					//$datos = CHtml::listData(Persona::model()->findAll(),'idPersona','nombrePersona');
					//	echo $form->dropDownList($modelParticipantes, 'id', $datos);
					?>
					<?php echo $form->textField($modelParticipantes,'idParticipante'); ?>
					<?php echo $form->error($modelParticipantes,'idParticipante'); ?>
					<?php echo CHtml::submitButton("Agregar")?>
		<?php $this->endWidget();?>
	</div>

	
	<!--
	<div class="row">
		<?php 
			$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
				"id"=>'ventanaParticipantes',
				"options"=>array(
						"title"=>'Agregar participantes al proyecto',
						"width"=>400,
						"height"=>400,
						"autoOpen"=>false,
						"resizable"=>true,
						"modal"=>true,
						"overLay"=>array(
								'backgroundColor'=>'#000',
								'opacity'=>'0,5',
								),
						),
					));
		?>
			<!--
			<?php $form=$this->beginWidget("CActiveForm",array("action"=>Yii::app()->createUrl("proyectos/view"))); ?>
					<?php 
					//$datos = CHtml::listData(Persona::model()->findAll(),'idPersona','nombrePersona');
					//	echo $form->dropDownList($modelParticipantes, 'id', $datos);
					?>
					<?php echo $form->textField($modelParticipantes,'idParticipante'); ?>
					<?php echo $form->error($modelParticipantes,'idParticipante'); ?>
					<?php echo CHtml::submitButton("Agregar")?>
			<?php $this->endWidget();?>

			
			<?php
			//echo $this->renderPartial('_formParticipantes', array('modelParticipantes'=>$modelParticipantes));
			/*
			?>
				<?php echo $form->labelEx($modelPersona,'cedulaPersona'); ?>
				<?php 
				$datos = CHtml::listData(Persona::model()->findAll(),'idPersona','nombrePersona');
					echo $form->dropDownList($modelPersona, 'cedulaPersona', $datos);
				?>
				<!--
				<?php echo $form->textField($modelPersona,'cedulaPersona',array('size'=>25,'maxlength'=>25,'style'=>'border-radius: 7px;  border-style: dotted; border-color: rgb(211,211,211);')); ?>
				-->
				<?php echo $form->error($modelPersona,'cedulaPersona'); ?>
				<!-- <?php echo CHtml::submitButton('Agregar',array('name'=>'agregar')); ?> -->
				<?php echo CHtml::link('Link Text',array('Proyectos/agregar',
                                         'param1'=>$modelPersona->nombrePersona)); ?>
				<?php
			/*
				echo $form->labelEx($modelPersona,'cedulaPersona');
				$datos = Persona::model()->findAll();
				echo $form->dropDownList($modelPersona, 'cedulaPersona', $datos);
			*/
			$this->endWidget('zii.widgets.jui.CJuiDialog');
		?>

		<?php echo CHtml::link('Agregar participante', '', array('onclick'=>'$("#ventanaParticipantes").dialog("open"); return false;'));?>
	</div>
	-->
	<div class="row buttons" style="text-align: right; ">
	 	<?php echo CHtml::submitButton('Volver', array('submit' => array('proyectos/admin'))); ?>
	</div>
	

<?php $this->endWidget(); ?>

</div><!-- form -->