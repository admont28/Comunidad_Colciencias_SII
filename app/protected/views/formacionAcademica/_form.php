<?php
/* @var $this FormacionAcademicaController */
/* @var $model FormacionAcademica */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'formacion-academica-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary(array($modelFormacionAcademica,$modelIdioma,$modelFormacionComplementaria,$modelInformacionFormacionAcademica,$modelInformacionFormacionComplementaria)); ?>

	<h2> Formación Académica </h2>

	<div class="row">
		<?php echo $form->labelEx($modelInformacionFormacionAcademica,'nivelFormacion'); ?>
		<?php 
			echo $form->dropDownList($modelInformacionFormacionAcademica,'nivelFormacion',
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
		<!-- <?php echo $form->textField($modelInformacionFormacionAcademica,'nivelFormacion',array('size'=>25,'maxlength'=>25)); ?> -->
		<?php echo $form->error($modelInformacionFormacionAcademica,'nivelFormacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelInformacionFormacionAcademica,'institucion'); ?>
		<?php echo $form->textField($modelInformacionFormacionAcademica,'institucion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($modelInformacionFormacionAcademica,'institucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelInformacionFormacionAcademica,'programaAcademico'); ?>
		<?php echo $form->textField($modelInformacionFormacionAcademica,'programaAcademico',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($modelInformacionFormacionAcademica,'programaAcademico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelInformacionFormacionAcademica,'Ciudad_idCiudad'); ?>
		<?php
			$datos = CHtml::listData(Ciudad::model()->findAll(),'idCiudad','nombreCiudad'); 
			echo $form->DropDownList($modelInformacionFormacionAcademica,'Ciudad_idCiudad',$datos, array('empty'=>'--Seleccione una opcion--')); ?>
		<!-- <?php echo $form->textField($modelInformacionFormacionAcademica,'Ciudad_idCiudad'); ?> -->
		<?php echo $form->error($modelInformacionFormacionAcademica,'Ciudad_idCiudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelFormacionAcademica,'intensidadHoraria'); ?>
		<?php echo $form->textField($modelFormacionAcademica,'intensidadHoraria'); ?>
		<?php echo $form->error($modelFormacionAcademica,'intensidadHoraria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelInformacionFormacionAcademica,'fechaInicio'); ?>
		<?php
		  $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		   'model'=>$modelInformacionFormacionAcademica,
		   'attribute'=>'fechaInicio',
		   'value'=>$modelInformacionFormacionAcademica->fechaInicio,
		   'language' => 'es',
		   'htmlOptions' => array('readonly'=>"readonly"),
		   'options'=>array(
		    'autoSize'=>true,
		    'defaultDate'=>$modelInformacionFormacionAcademica->fechaInicio,
		    'dateFormat'=>'yy-mm-dd',
		    'buttonImage'=>Yii::app()->baseUrl.'/images/calendario.png',
		    'buttonImageOnly'=>true,
		    'buttonText'=>'Fecha',
		    'selectOtherMonths'=>true,
		    'showAnim'=>'slide',
		    'showButtonPanel'=>true,
		    'showOn'=>'button', 
		    'showOtherMonths'=>true, 
		    'changeMonth' => 'true', 
		    'changeYear' => 'true', 
		    'minDate'=>'1900-01-01', 
		    'maxDate'=> '0',
		    ),
		  )); 
		 ?>
		<?php echo $form->error($modelInformacionFormacionAcademica,'fechaInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelInformacionFormacionAcademica,'fechaFinalizacion'); ?>
		<?php
		  $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		   'model'=>$modelInformacionFormacionAcademica,
		   'attribute'=>'fechaFinalizacion',
		   'value'=>$modelInformacionFormacionAcademica->fechaFinalizacion,
		   'language' => 'es',
		   'htmlOptions' => array('readonly'=>"readonly"),
		   'options'=>array(
		    'autoSize'=>true,
		    'defaultDate'=>$modelInformacionFormacionAcademica->fechaFinalizacion,
		    'dateFormat'=>'yy-mm-dd',
		    'buttonImage'=>Yii::app()->baseUrl.'/images/calendario.png',
		    'buttonImageOnly'=>true,
		    'buttonText'=>'Fecha',
		    'selectOtherMonths'=>true,
		    'showAnim'=>'slide',
		    'showButtonPanel'=>true,
		    'showOn'=>'button', 
		    'showOtherMonths'=>true, 
		    'changeMonth' => 'true', 
		    'changeYear' => 'true', 
		    'minDate'=>'1900-01-01', 
		    'maxDate'=> '0',
		    ),
		  )); 
		 ?>
		<?php echo $form->error($modelInformacionFormacionAcademica,'fechaFinalizacion'); ?>
	</div>



	<div class="row">
		<?php echo $form->labelEx($modelFormacionAcademica,'fechaObtencionTitulo'); ?>
		<?php
		  $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		   'model'=>$modelFormacionAcademica,
		   'attribute'=>'fechaObtencionTitulo',
		   'value'=>$modelFormacionAcademica->fechaObtencionTitulo,
		   'language' => 'es',
		   'htmlOptions' => array('readonly'=>"readonly"),
		   'options'=>array(
		    'autoSize'=>true,
		    'defaultDate'=>$modelFormacionAcademica->fechaObtencionTitulo,
		    'dateFormat'=>'yy-mm-dd',
		    'buttonImage'=>Yii::app()->baseUrl.'/images/calendario.png',
		    'buttonImageOnly'=>true,
		    'buttonText'=>'Fecha',
		    'selectOtherMonths'=>true,
		    'showAnim'=>'slide',
		    'showButtonPanel'=>true,
		    'showOn'=>'button', 
		    'showOtherMonths'=>true, 
		    'changeMonth' => 'true', 
		    'changeYear' => 'true', 
		    'minDate'=>'1900-01-01', 
		    'maxDate'=> '0',
		    ),
		  )); 
		 ?>
		<?php echo $form->error($modelFormacionAcademica,'fechaObtencionTitulo'); ?>
	</div>

	<div class="row">
		<p>Si no ha concluido indique el tiempo en que lleva la formación </p>
		<?php echo $form->labelEx($modelInformacionFormacionAcademica,'tiempoFormacion'); ?>
		<?php echo $form->textField($modelInformacionFormacionAcademica,'tiempoFormacion'); ?>
		<?php echo $form->error($modelInformacionFormacionAcademica,'tiempoFormacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelInformacionFormacionAcademica,'unidadTiempoFormacion'); ?>
		<?php 
			echo $form->dropDownList($modelInformacionFormacionAcademica,'unidadTiempoFormacion',
			array('Meses'=>'Meses','Semestres'=>'Semestres',
			 'Años'=>'Años',
			));
		?>
		<!-- <?php echo $form->textField($modelInformacionFormacionAcademica,'unidadTiempoFormacion',array('size'=>10,'maxlength'=>10)); ?> -->
		<?php echo $form->error($modelInformacionFormacionAcademica,'unidadTiempoFormacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelInformacionFormacionAcademica,'promedioPeriodos'); ?>
		<?php echo $form->textField($modelInformacionFormacionAcademica,'promedioPeriodos',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($modelInformacionFormacionAcademica,'promedioPeriodos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelFormacionAcademica,'becado'); ?>
		<?php echo $form->textField($modelFormacionAcademica,'becado',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($modelFormacionAcademica,'becado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelFormacionAcademica,'institucionOfreceBeca'); ?>
		<?php echo $form->textField($modelFormacionAcademica,'institucionOfreceBeca',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($modelFormacionAcademica,'institucionOfreceBeca'); ?>
	</div>

	<!-- ................... IDIOMA ..............................-->

	<h2> Idioma </h2>
	
	<div class="row">
		<?php echo $form->labelEx($modelIdioma,'nombreIdioma'); ?>
		<?php echo $form->textField($modelIdioma,'nombreIdioma',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($modelIdioma,'nombreIdioma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelIdioma,'nivelEscritura'); ?>
		<?php
			$niveles = array('Deficiente'=>'Deficiente', 'Aceptable'=>'Aceptable','Bueno'=>'Bueno');
            echo $form->radioButtonList($modelIdioma,'nivelEscritura',$niveles,array('separator'=>' ',
				'labelOptions'=>array('style'=>'display:inline')));
        ?>
		<!-- <?php echo $form->textField($modelIdioma,'nivelEscritura',array('size'=>10,'maxlength'=>10)); ?> -->
		<?php echo $form->error($modelIdioma,'nivelEscritura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelIdioma,'nivelLectura'); ?>
		<?php
			$niveles = array('Deficiente'=>'Deficiente', 'Aceptable'=>'Aceptable','Bueno'=>'Bueno');
            echo $form->radioButtonList($modelIdioma,'nivelLectura',$niveles,array('separator'=>' ',
				'labelOptions'=>array('style'=>'display:inline')));
        ?>
		<!-- <?php echo $form->textField($modelIdioma,'nivelLectura',array('size'=>10,'maxlength'=>10)); ?> -->
		<?php echo $form->error($modelIdioma,'nivelLectura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelIdioma,'nivelHabla'); ?>
		<?php
			$niveles = array('Deficiente'=>'Deficiente', 'Aceptable'=>'Aceptable','Bueno'=>'Bueno');
            echo $form->radioButtonList($modelIdioma,'nivelHabla',$niveles,array('separator'=>' ',
				'labelOptions'=>array('style'=>'display:inline')));
        ?>
		<!-- <?php echo $form->textField($modelIdioma,'nivelHabla',array('size'=>10,'maxlength'=>10)); ?> -->
		<?php echo $form->error($modelIdioma,'nivelHabla'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelIdioma,'nivelEscucha'); ?>
		<?php
			$niveles = array('Deficiente'=>'Deficiente', 'Aceptable'=>'Aceptable','Bueno'=>'Bueno');
            echo $form->radioButtonList($modelIdioma,'nivelEscucha',$niveles,array('separator'=>' ',
				'labelOptions'=>array('style'=>'display:inline')));
        ?>
		<!-- <?php echo $form->textField($modelIdioma,'nivelEscucha',array('size'=>10,'maxlength'=>10)); ?> -->
		<?php echo $form->error($modelIdioma,'nivelEscucha'); ?>
	</div>

	<!-- ................... FORMACION COMPLEMENTARIA ..............................-->

	<h2> Formación Complementaria </h2>

	<div class="row">
		<?php echo $form->labelEx($modelInformacionFormacionComplementaria,'nivelFormacion'); ?>
		<?php 
			echo $form->dropDownList($modelInformacionFormacionComplementaria,'nivelFormacion',
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
		<!-- <?php echo $form->textField($modelInformacionFormacionComplementaria,'nivelFormacion',array('size'=>25,'maxlength'=>25)); ?> -->
		<?php echo $form->error($modelInformacionFormacionComplementaria,'nivelFormacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelInformacionFormacionComplementaria,'institucion'); ?>
		<?php echo $form->textField($modelInformacionFormacionComplementaria,'institucion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($modelInformacionFormacionComplementaria,'institucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelInformacionFormacionComplementaria,'programaAcademico'); ?>
		<?php echo $form->textField($modelInformacionFormacionComplementaria,'programaAcademico',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($modelInformacionFormacionComplementaria,'programaAcademico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelInformacionFormacionComplementaria,'Ciudad_idCiudad'); ?>
		<?php
			$datos = CHtml::listData(Ciudad::model()->findAll(),'idCiudad','nombreCiudad'); 
			echo $form->DropDownList($modelInformacionFormacionComplementaria,'Ciudad_idCiudad',$datos, array('empty'=>'--Seleccione una opcion--')); ?>
		<!-- <?php echo $form->textField($modelInformacionFormacionComplementaria,'Ciudad_idCiudad'); ?> -->
		<?php echo $form->error($modelInformacionFormacionComplementaria,'Ciudad_idCiudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelInformacionFormacionComplementaria,'fechaInicio'); ?>
		<?php
		  $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		   'model'=>$modelInformacionFormacionComplementaria,
		   'attribute'=>'fechaInicio',
		   'value'=>$modelInformacionFormacionComplementaria->fechaInicio,
		   'language' => 'es',
		   'htmlOptions' => array('readonly'=>"readonly"),
		   'options'=>array(
		    'autoSize'=>true,
		    'defaultDate'=>$modelInformacionFormacionComplementaria->fechaInicio,
		    'dateFormat'=>'yy-mm-dd',
		    'buttonImage'=>Yii::app()->baseUrl.'/images/calendario.png',
		    'buttonImageOnly'=>true,
		    'buttonText'=>'Fecha',
		    'selectOtherMonths'=>true,
		    'showAnim'=>'slide',
		    'showButtonPanel'=>true,
		    'showOn'=>'button', 
		    'showOtherMonths'=>true, 
		    'changeMonth' => 'true', 
		    'changeYear' => 'true', 
		    'minDate'=>'1900-01-01', 
		    'maxDate'=> '0',
		    ),
		  )); 
		 ?>
		<?php echo $form->error($modelInformacionFormacionComplementaria,'fechaInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelInformacionFormacionComplementaria,'fechaFinalizacion'); ?>
		<?php
		  $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		   'model'=>$modelInformacionFormacionComplementaria,
		   'attribute'=>'fechaFinalizacion',
		   'value'=>$modelInformacionFormacionComplementaria->fechaFinalizacion,
		   'language' => 'es',
		   'htmlOptions' => array('readonly'=>"readonly"),
		   'options'=>array(
		    'autoSize'=>true,
		    'defaultDate'=>$modelInformacionFormacionComplementaria->fechaFinalizacion,
		    'dateFormat'=>'yy-mm-dd',
		    'buttonImage'=>Yii::app()->baseUrl.'/images/calendario.png',
		    'buttonImageOnly'=>true,
		    'buttonText'=>'Fecha',
		    'selectOtherMonths'=>true,
		    'showAnim'=>'slide',
		    'showButtonPanel'=>true,
		    'showOn'=>'button', 
		    'showOtherMonths'=>true, 
		    'changeMonth' => 'true', 
		    'changeYear' => 'true', 
		    'minDate'=>'1900-01-01', 
		    'maxDate'=> '0',
		    ),
		  )); 
		 ?>
		<?php echo $form->error($modelInformacionFormacionComplementaria,'fechaFinalizacion'); ?>
	</div>

	<div class="row">
		<p>Si no ha concluido indique el tiempo en que lleva la formación </p>
		<?php echo $form->labelEx($modelInformacionFormacionComplementaria,'tiempoFormacion'); ?>
		<?php echo $form->textField($modelInformacionFormacionComplementaria,'tiempoFormacion'); ?>
		<?php echo $form->error($modelInformacionFormacionComplementaria,'tiempoFormacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelInformacionFormacionComplementaria,'unidadTiempoFormacion'); ?>
		<?php 
			echo $form->dropDownList($modelInformacionFormacionComplementaria,'unidadTiempoFormacion',
			array('Meses'=>'Meses','Semestres'=>'Semestres','Años'=>'Años',));
		?>
		<!-- <?php echo $form->textField($modelInformacionFormacionComplementaria,'unidadTiempoFormacion',array('size'=>10,'maxlength'=>10)); ?> -->
		<?php echo $form->error($modelInformacionFormacionComplementaria,'unidadTiempoFormacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelInformacionFormacionComplementaria,'promedioPeriodos'); ?>
		<?php echo $form->textField($modelInformacionFormacionComplementaria,'promedioPeriodos',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($modelInformacionFormacionComplementaria,'promedioPeriodos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelFormacionComplementaria,'tituloObtenido'); ?>
		<?php echo $form->textField($modelFormacionComplementaria,'tituloObtenido',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($modelFormacionComplementaria,'tituloObtenido'); ?>
	</div>
	<!--
	<div class="row">
		<?php echo $form->labelEx($modelFormacionComplementaria,'InformacionFormacion_idInformacionFormacion'); ?>
		<?php echo $form->textField($modelFormacionComplementaria,'InformacionFormacion_idInformacionFormacion'); ?>
		<?php echo $form->error($modelFormacionComplementaria,'InformacionFormacion_idInformacionFormacion'); ?>
	</div>
	-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($modelFormacionAcademica->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->