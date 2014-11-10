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
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div style="margin-left: 5px;">
		<div class="row">
			<?php echo $form->labelEx($model,'tipoProyecto'); ?>
			<div class ="compactRadioGroup">
				<?php
	                echo $form->radioButtonList($model, 'tipoProyecto',
	                    array(  'Investigacion y desarrollo' => ' | Investigación y desarrollo',
	                            'Investigacion, desarrollo e innovación' => ' | Investigación, desarrollo e innovación',
	                            'Extension y respunsabilidad social CTI' => ' | Extension y respunsabilidad social CTI' ) );
	            ?>
			</div>
		</div>
	</div>

	<div class="columna2">
		
		<div class="row">
			<?php echo $form->labelEx($model,'nombreProyecto'); ?>
			<?php echo $form->textField($model,'nombreProyecto',array('size'=>60,'maxlength'=>100, 'style'=>'border-radius: 7px; border-color: rgb(211,211,211);')); ?>
			<?php echo $form->error($model,'nombreProyecto'); ?>
		</div>

		<p>
			Fecha de inicio
		</p>

		<div class="row">
			<?php echo $form->labelEx($model,'anioInicio'); ?>

				<?php 
					echo $form->dropDownList($model,'anioInicio',
					array('No informado'=>'No informado','Primaria Incompleta'=>'Primaria Incompleta',
					 'Primario Secundario'=>'Primario Secundario',
					 'Técnico - Nivel medio'=>'Técnico - Nivel medio',
					 'Técnico nivel superior'=>'Técnico nivel superior',
					 'Jefe de Cátedra'=>'Jefe de Cátedra',
					 'Perfeccionamiento'=>'Perfeccionamiento',
					 'Pregrado/Universitario'=>'Pregrado/Universitario',
					 'Especialización'=>'Especialización',
					 'Especialización-residencia médica'=>'Especialización-residencia médica',
					 'Maestría/Magister'=>'Maestría/Magister',
					 'Doctorado'=>'Doctorado',
					 'Postdoctorado'=>'Postdoctorado',
					 'MBA'=>'MBA',));
				?>
			<!-- <?php echo $form->textField($model,'anioInicio'); ?> -->
			<?php echo $form->error($model,'anioInicio'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'mesInicio'); ?>
			<?php echo $form->textField($model,'mesInicio',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'mesInicio'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'tipoFinanciacion'); ?>
			<?php
				$niveles = array('Financiado'=>' | Financiado', 'Solidario'=>' | Solidario');
		        echo $form->radioButtonList($model,'tipoFinanciacion',$niveles,array('separator'=>' ',
					'labelOptions'=>array('style'=>'display:inline;')));
		        ?>
				<!-- <?php echo $form->textField($model,'tipoFinanciacion',array('size'=>10,'maxlength'=>10)); ?> -->
				<?php echo $form->error($model,'tipoFinanciacion'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'fuentesFinanciacion'); ?>
			<?php
				$niveles = array('Interna'=>' | Interna', 'Externa'=>' | Externa');
		        echo $form->radioButtonList($model,'fuentesFinanciacion',$niveles,array('separator'=>' ',
					'labelOptions'=>array('style'=>'display:inline;')));
		        ?>
				<!-- <?php echo $form->textField($model,'fuentesFinanciacion',array('size'=>10,'maxlength'=>10)); ?> -->
				<?php echo $form->error($model,'fuentesFinanciacion'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'resumen'); ?>
			<?php echo $form->textArea($model,'resumen',array('maxlength' => 300, 'rows' => 5, 'cols' => 60, 'style'=>'border-radius: 7px; border-color: rgb(211,211,211);')); ?>
			<?php echo $form->error($model,'resumen'); ?>
		</div>

	</div>





	<div class="row">
		<?php echo $form->labelEx($model,'idProyectos'); ?>
		<?php echo $form->textField($model,'idProyectos', array('style'=>'border-radius: 7px; border-color: rgb(211,211,211);')); ?>
		<?php echo $form->error($model,'idProyectos'); ?>
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
		<?php echo $form->labelEx($model,'integrantesProyecto'); ?>
		<?php echo $form->textField($model,'integrantesProyecto',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'integrantesProyecto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'certificado'); ?>
		<?php echo $form->textField($model,'certificado',array('size'=>60,'maxlength'=>100, 'style'=>'border-radius: 7px; border-color: rgb(211,211,211);')); ?>
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
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->