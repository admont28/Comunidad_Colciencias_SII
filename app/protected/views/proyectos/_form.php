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
					array('1980'=>'1980','1981'=>'1981',
					 '1982'=>'1982','1983'=>'1983','1984'=>'1984',
					 '1985'=>'1985','1986'=>'1986','1987'=>'1987',
					 '1988'=>'1988','1989'=>'1989','1990'=>'1990',
					 '1991'=>'1991','1992'=>'1992','1993'=>'1993',
					 '1994'=>'1994','1995'=>'1995','1996'=>'1996',
					 '1997'=>'1997','1998'=>'1998','1999'=>'1999',
					 '2000'=>'2000','2001'=>'2001','2002'=>'2002',
					 '2003'=>'2003','2004'=>'2004','2005'=>'2005',
					 '2006'=>'2006','2007'=>'2007','2008'=>'2008',
					 '2009'=>'2009','2010'=>'2010','2011'=>'2011',
					 '2012'=>'2012','2013'=>'2013','2014'=>'2014',));
				?>
			<!-- <?php echo $form->textField($model,'anioInicio'); ?> -->
			<?php echo $form->error($model,'anioInicio'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'mesInicio'); ?>
			<?php 
					echo $form->dropDownList($model,'mesInicio',
					array('Enero'=>'Enero','Febrero'=>'Febrero',
					 'Marzo'=>'Marzo','Abril'=>'Abril','Mayo'=>'Mayo',
					 'Junio'=>'Junio','Julio'=>'Julio','Agosto'=>'Agosto',
					 'Septiembre'=>'Septiembre','Octubre'=>'Octubre',
					 'Noviembre'=>'Noviembre','Diciembre'=>'Diciembre',));
				?>
			<!-- <?php echo $form->textField($model,'mesInicio'); ?> -->
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
	<p>
			Fecha de fin
	</p>
	
	<div class="row">
		<?php echo $form->labelEx($model,'anioFin'); ?>
		<?php 
					echo $form->dropDownList($model,'anioFin',
					array('1980'=>'1980','1981'=>'1981',
					 '1982'=>'1982','1983'=>'1983','1984'=>'1984',
					 '1985'=>'1985','1986'=>'1986','1987'=>'1987',
					 '1988'=>'1988','1989'=>'1989','1990'=>'1990',
					 '1991'=>'1991','1992'=>'1992','1993'=>'1993',
					 '1994'=>'1994','1995'=>'1995','1996'=>'1996',
					 '1997'=>'1997','1998'=>'1998','1999'=>'1999',
					 '2000'=>'2000','2001'=>'2001','2002'=>'2002',
					 '2003'=>'2003','2004'=>'2004','2005'=>'2005',
					 '2006'=>'2006','2007'=>'2007','2008'=>'2008',
					 '2009'=>'2009','2010'=>'2010','2011'=>'2011',
					 '2012'=>'2012','2013'=>'2013','2014'=>'2014',));
				?>
			<!-- <?php echo $form->textField($model,'anioFin'); ?> -->
		<?php echo $form->error($model,'anioFin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mesFin'); ?>
		<?php 
					echo $form->dropDownList($model,'mesFin',
					array('Enero'=>'Enero','Febrero'=>'Febrero',
					 'Marzo'=>'Marzo','Abril'=>'Abril','Mayo'=>'Mayo',
					 'Junio'=>'Junio','Julio'=>'Julio','Agosto'=>'Agosto',
					 'Septiembre'=>'Septiembre','Octubre'=>'Octubre',
					 'Noviembre'=>'Noviembre','Diciembre'=>'Diciembre',));
				?>
			<!-- <?php echo $form->textField($model,'mesFin'); ?> -->
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

	<div class="row">
		<?php echo $form->labelEx($model,'duenoPersona_idPersona'); ?>
		<?php echo $form->textField($model,'duenoPersona_idPersona'); ?>
		<?php echo $form->error($model,'duenoPersona_idPersona'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->