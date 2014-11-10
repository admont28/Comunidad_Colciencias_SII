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

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<h2 class="titulo2"> Formación Académica </h2>

	<div style="margin-left: 5px;">

		<div class="row">
		<?php echo $form->labelEx($model,'formAcaNivelFormacion'); ?>
		<?php 
			echo $form->dropDownList($model,'formAcaNivelFormacion',
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
		<!-- <?php echo $form->textField($model,'formAcaNivelFormacion',array('size'=>25,'maxlength'=>25)); ?> -->
		<?php echo $form->error($model,'formAcaNivelFormacion'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'formAcaInstitucion'); ?>
			<?php echo $form->textField($model,'formAcaInstitucion',array('size'=>60,'maxlength'=>100,'style'=>'border-radius: 7px;  border-style: dotted; border-color: rgb(211,211,211);')); ?>
			<?php echo $form->error($model,'formAcaInstitucion'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'formAcaProgramaAcademico'); ?>
			<?php echo $form->textField($model,'formAcaProgramaAcademico',array('size'=>60,'maxlength'=>100,'style'=>'border-radius: 7px;  border-style: dotted; border-color: rgb(211,211,211);')); ?>
			<?php echo $form->error($model,'formAcaProgramaAcademico'); ?>
		</div>
	</div>

	<div class="columna2">

		<div class="row">
			<?php echo $form->labelEx($model,'formAcaIntensidadHoraria'); ?>
			<?php echo $form->textField($model,'formAcaIntensidadHoraria', array('style'=>'border-radius: 7px;  border-style: dotted; border-color: rgb(211,211,211);')); ?>
			<?php echo $form->error($model,'formAcaIntensidadHoraria'); ?>
		</div>
	</div>
	<div class="columna2">
		<div class="row">
			<?php echo $form->labelEx($model,'formAcaCiudad_idCiudad'); ?>
			<?php
				$datos = CHtml::listData(Ciudad::model()->findAll(),'idCiudad','nombreCiudad'); 
				echo $form->DropDownList($model,'formAcaCiudad_idCiudad',$datos, array('empty'=>'--Seleccione una opción--')); ?>
			<!-- <?php echo $form->textField($model,'formAcaCiudad_idCiudad'); ?> -->
			<?php echo $form->error($model,'formAcaCiudad_idCiudad'); ?>
		</div>
	</div>

	<div class="separador"></div>

	<div class="columna1">

		<div class="row">
			<?php echo $form->labelEx($model,'formAcaFechaInicio'); ?>
			<?php
				$cedulaPersona = Yii::app()->user->id;
				$modelPersona = Persona::model()->find('cedulaPersona=:cedulaPersona', array(':cedulaPersona'=>$cedulaPersona));
			  $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			   'model'=>$model,
			   'attribute'=>'formAcaFechaInicio',
			   'value'=>$model->formAcaFechaInicio,
			   'language' => 'es',
			   'htmlOptions' => array('readonly'=>"readonly"),
			   'options'=>array(
			    'autoSize'=>true,
			    'defaultDate'=>$model->formAcaFechaInicio,
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
			    'minDate'=> $modelPersona->fechaNacimientoPersona, 
			    'maxDate'=> '0',
			    ),
			  )); 
			 ?>
			<?php echo $form->error($model,'formAcaFechaInicio'); ?>
		</div>
	</div>
	
	<div class="columna1">
		<div class="row">
			<?php echo $form->labelEx($model,'formAcaFechaFinalizacion'); ?>
			<?php
			  $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			   'model'=>$model,
			   'attribute'=>'formAcaFechaFinalizacion',
			   'value'=>$model->formAcaFechaFinalizacion,
			   'language' => 'es',
			   'htmlOptions' => array('readonly'=>"readonly"),
			   'options'=>array(
			    'autoSize'=>true,
			    'defaultDate'=>$model->formAcaFechaFinalizacion,
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
			    'minDate'=> $model->formAcaFechaInicio, 
			    'maxDate'=> '0',
			    ),
			  )); 
			 ?>
			<?php echo $form->error($model,'formAcaFechaFinalizacion'); ?>
		</div>
	</div>

	<div class="columna1">

		<div class="row">
			<?php echo $form->labelEx($model,'formAcaFechaObtencionTitulo'); ?>
			<?php
			  $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			   'model'=>$model,
			   'attribute'=>'formAcaFechaObtencionTitulo',
			   'value'=>$model->formAcaFechaObtencionTitulo,
			   'language' => 'es',
			   'htmlOptions' => array('readonly'=>"readonly"),
			   'options'=>array(
			    'autoSize'=>true,
			    'defaultDate'=>$model->formAcaFechaObtencionTitulo,
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
			    'minDate'=> $model->formAcaFechaInicio, 
			    'maxDate'=> '0',
			    ),
			  )); 
			 ?>
			<?php echo $form->error($model,'formAcaFechaObtencionTitulo'); ?>
		</div>
	</div>

	<div class="separador"></div>

	<div class="columna1">
		<div class="row">
			<p>Si no ha concluido indique el tiempo en que lleva la formación </p>
			<!-- <?php echo $form->labelEx($model,'formAcaTiempoFormacion'); ?> -->
			<?php echo $form->textField($model,'formAcaTiempoFormacion', array('style'=>'border-radius: 7px;  border-style: dotted; border-color: rgb(211,211,211);')); ?>
			<?php echo $form->error($model,'formAcaTiempoFormacion'); ?>
			<!-- <?php echo $form->labelEx($model,'formAcaUnidadTiempoFormacion'); ?> -->
			<?php 
				echo $form->dropDownList($model,'formAcaUnidadTiempoFormacion',
				array('Meses'=>'Meses','Semestres'=>'Semestres',
				 'Años'=>'Años',
				));
			?>
			<!-- <?php echo $form->textField($model,'formAcaUnidadTiempoFormacion',array('size'=>10,'maxlength'=>10)); ?> -->
			<?php echo $form->error($model,'formAcaUnidadTiempoFormacion'); ?>
		</div>		
	</div>

	<div class="columna1">
		<div class="row">
			<?php echo $form->labelEx($model,'formAcaPromedioPeriodos'); ?>
			<?php echo $form->textField($model,'formAcaPromedioPeriodos',array('size'=>20,'maxlength'=>2,'style'=>'border-radius: 7px;  border-style: dotted; border-color: rgb(211,211,211);')); ?>
			<?php echo $form->error($model,'formAcaPromedioPeriodos'); ?>
		</div>
	</div>

	<div class="columna1">
		<div class="row">
			<?php echo $form->labelEx($model,'formAcaBecado'); ?>
			<?php 
				echo $form->dropDownList($model,'formAcaBecado',
				array('Si'=>'Si','No'=>'No',));
			?>
			<!-- <?php echo $form->textField($model,'formAcaBecado',array('size'=>10,'maxlength'=>10)); ?> -->
			<?php echo $form->error($model,'formAcaBecado'); ?>
		</div>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'formAcaInstitucionOfreceBeca', array('style'=>'clear: left; overflow: hidden; margin-left: 5px;')); ?>
		<?php echo $form->textField($model,'formAcaInstitucionOfreceBeca',array('size'=>60,'maxlength'=>100,'style'=>'clear: left; overflow: hidden; margin-left: 5px; border-radius: 7px;  border-style: dotted; border-color: rgb(211,211,211);')); ?>
		<?php echo $form->error($model,'formAcaInstitucionOfreceBeca'); ?>
	</div>

	<div class="separador"></div>

	<div style="margin-left: 5px;">
		<div class="row">
			<?php echo $form->labelEx($model,'nombreIdioma'); ?>
			<?php echo $form->dropDownList($model,'nombreIdioma',
						array('Mandarín'=>'Mandarín',
						'Español'=>'Español', 
						'Inglés'=>'Inglés',
						'Hindi'=>'Hindi',
						'Bengalí'=>'Bengalí',
						'Portugués'=>'Portugués',
						'Ruso'=>'Ruso',
						'Japonés'=>'Japonés',
						'Alemán'=>'Alemán',
						'Francés'=>'Francés',
						'Coreano'=>'Coreano',
						'Cantonés'=>'Cantonés',
						'Telugú'=>'Telugú',
						'Maratí'=>'Maratí',
						'Vietnamita'=>'Vietnamita',
						'Tamil'=>'Tamil',
						'Punyabí'=>'Punyabí',
						'Italiano'=>'Italiano',
						'Turco'=>'Turco',
						'Urdu'=>'Urdu',
						));?>
			<!--
				<?php echo $form->textField($model,'nombreIdioma',array('size'=>45,'maxlength'=>45)); ?>
			-->
			<?php echo $form->error($model,'nombreIdioma'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'nivelEscritura'); ?>
			<?php
				$niveles = array('Deficiente'=>'Deficiente', 'Aceptable'=>'Aceptable','Bueno'=>'Bueno');
	            echo $form->radioButtonList($model,'nivelEscritura',$niveles,array('separator'=>' ',
					'labelOptions'=>array('style'=>'display:inline;')));
	        ?>
			<!-- <?php echo $form->textField($model,'nivelEscritura',array('size'=>10,'maxlength'=>10)); ?> -->
			<?php echo $form->error($model,'nivelEscritura'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'nivelLectura'); ?>
			<?php
				$niveles = array('Deficiente'=>'Deficiente', 'Aceptable'=>'Aceptable','Bueno'=>'Bueno');
	            echo $form->radioButtonList($model,'nivelLectura',$niveles,array('separator'=>' ',
					'labelOptions'=>array('style'=>'display:inline')));
	        ?>
			<!-- <?php echo $form->textField($model,'nivelLectura',array('size'=>10,'maxlength'=>10)); ?> -->
			<?php echo $form->error($model,'nivelLectura'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'nivelHabla'); ?>
			<?php
				$niveles = array('Deficiente'=>'Deficiente', 'Aceptable'=>'Aceptable','Bueno'=>'Bueno');
	            echo $form->radioButtonList($model,'nivelHabla',$niveles,array('separator'=>' ',
					'labelOptions'=>array('style'=>'display:inline')));
	        ?>
			<!-- <?php echo $form->textField($model,'nivelHabla',array('size'=>10,'maxlength'=>10)); ?> -->
			<?php echo $form->error($model,'nivelHabla'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'nivelEscucha'); ?>
			<?php
				$niveles = array('Deficiente'=>'Deficiente', 'Aceptable'=>'Aceptable','Bueno'=>'Bueno');
	            echo $form->radioButtonList($model,'nivelEscucha',$niveles,array('separator'=>' ',
					'labelOptions'=>array('style'=>'display:inline')));
	        ?>
			<!-- <?php echo $form->textField($model,'nivelEscucha',array('size'=>10,'maxlength'=>10)); ?> -->
			<?php echo $form->error($model,'nivelEscucha'); ?>
		</div>
	</div>

	<div class="separador"> </div>

	<!-- ......................................... FORMACIÓN COMPLEMENTARIA ............................... -->

	<h2 class="titulo1"> Formación complementaria </h2>

	<p>En este espacio diligencie los datos requeridos. Los datos marcados con (*) son obligatorios, cuando termine de click en aceptar</p>

	<div class="separador"> </div>

	<div style="margin-left 5px;">
		<div class="row">
			<?php echo $form->labelEx($model,'formComNivelFormacion'); ?>
			<?php 
				echo $form->dropDownList($model,'formComNivelFormacion',
				array('Otros'=>'Otros','Extension'=>'Extensión', 'Cursos de corta duracion'=>'Cursos de corta duración'));
			?>
			<!-- <?php echo $form->textField($model,'formComNivelFormacion',array('size'=>25,'maxlength'=>25)); ?> -->
			<?php echo $form->error($model,'formComNivelFormacion'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'formComInstitucion'); ?>
			<?php echo $form->textField($model,'formComInstitucion',array('size'=>60,'maxlength'=>100,'style'=>'border-radius: 7px;  border-style: dotted; border-color: rgb(211,211,211);')); ?>
			<?php echo $form->error($model,'formComInstitucion'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'formComProgramaAcademico'); ?>
			<?php echo $form->textField($model,'formComProgramaAcademico',array('size'=>60,'maxlength'=>100,'style'=>'border-radius: 7px;  border-style: dotted; border-color: rgb(211,211,211);')); ?>
			<?php echo $form->error($model,'formComProgramaAcademico'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'formComCiudad_idCiudad'); ?>
			<?php
				$datos = CHtml::listData(Ciudad::model()->findAll(),'idCiudad','nombreCiudad'); 
				echo $form->DropDownList($model,'formComCiudad_idCiudad',$datos, array('empty'=>'--Seleccione una opcion--')); ?>
			<!-- <?php echo $form->textField($model,'formComCiudad_idCiudad'); ?> -->
			<?php echo $form->error($model,'formComCiudad_idCiudad'); ?>
		</div>
	</div>

	<div class="separador"></div>

	<div class="columna2">
		<div class="row">
			<?php echo $form->labelEx($model,'formComFechaInicio'); ?>

			<?php
				$cedulaPersona = Yii::app()->user->id;
				$modelPersona = Persona::model()->find('cedulaPersona=:cedulaPersona', array(':cedulaPersona'=>$cedulaPersona));
			  $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			   'model'=>$model,
			   'attribute'=>'formComFechaInicio',
			   'value'=>$model->formComFechaInicio,
			   'language' => 'es',
			   'htmlOptions' => array('readonly'=>"readonly"),
			   'options'=>array(
			    'autoSize'=>true,
			    'defaultDate'=>$model->formComFechaInicio,
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
			    'minDate'=>$modelPersona->fechaNacimientoPersona, 
			    'maxDate'=> '0',
			    ),
			  )); 
			 ?>
			<?php echo $form->error($model,'formComFechaInicio'); ?>
		</div>
	</div>

	<div class="columna2">
		<div class="row">
			<?php echo $form->labelEx($model,'formComFechaFinalizacon'); ?>
			<?php
			  $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			   'model'=>$model,
			   'attribute'=>'formComFechaFinalizacon',
			   'value'=>$model->formComFechaFinalizacon,
			   'language' => 'es',
			   'htmlOptions' => array('readonly'=>"readonly"),
			   'options'=>array(
			    'autoSize'=>true,
			    'defaultDate'=>$model->formComFechaFinalizacon,
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
			<?php echo $form->error($model,'formComFechaFinalizacon'); ?>
		</div>
	</div>

	<div class="separador"></div>

	<div class="columna2">
		<div class="row">
			<p>Si no ha concluido indique el tiempo en que lleva la formación </p>
			<!-- <?php echo $form->labelEx($model,'formComTiempoFormacion'); ?> -->
			<?php echo $form->textField($model,'formComTiempoFormacion',array('style'=>'border-radius: 7px;  border-style: dotted; border-color: rgb(211,211,211);')); ?>
			<?php echo $form->error($model,'formComTiempoFormacion'); ?>

			<!-- <?php echo $form->labelEx($model,'formComUnidadTiempoFormacion'); ?> -->
			<?php 
				echo $form->dropDownList($model,'formComUnidadTiempoFormacion',
				array('Meses'=>'Meses','Semestres'=>'Semestres','Años'=>'Años',));
			?>
			<!-- <?php echo $form->textField($model,'formComUnidadTiempoFormacion',array('size'=>10,'maxlength'=>10)); ?> -->
			<?php echo $form->error($model,'formComUnidadTiempoFormacion'); ?>
		</div>
	</div>

	<div class="columna2">
		<div class="row">
			<?php echo $form->labelEx($model,'formComPromedioPeriodos'); ?>
			<?php echo $form->textField($model,'formComPromedioPeriodos',array('size'=>20,'maxlength'=>2,'style'=>'border-radius: 7px;  border-style: dotted; border-color: rgb(211,211,211);')); ?>
			<?php echo $form->error($model,'formComPromedioPeriodos'); ?>
		</div>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'formComTituloObtenido', array('style'=>'clear: left; overflow: hidden; margin-left: 5px;')); ?>
		<?php echo $form->textField($model,'formComTituloObtenido',array('size'=>60,'maxlength'=>30,'style'=>'clear: left; overflow: hidden; margin-left: 5px; border-radius: 7px;  border-style: dotted; border-color: rgb(211,211,211);')); ?>
		<?php echo $form->error($model,'formComTituloObtenido'); ?>
	</div>

	<div class="separador"></div>
	

	<h2 class="titulo2"> Información adicional </h2>

	<!--
	<div class="row">
		<?php echo $form->labelEx($model,'Persona_idPersona'); ?>
		<?php echo $form->textField($model,'Persona_idPersona'); ?>
		<?php echo $form->error($model,'Persona_idPersona'); ?>
	</div>
	-->


	<div class="columna1">
		<div class="row">
			<label> Palabras clave</label>
			<textarea name="textarea" style="border-radius: 7px; border-color: rgb(211,211,211);" maxlenght="300" rows="5" cols="30"></textarea>
			<div class="row buttons" style="text-align: right; ">
	 			<?php echo CHtml::Button('Añadir'); ?>
			</div>
		</div>
	</div>

	<div class="columna1">
		<div class="row">
			<label> Areas de conocimiento</label>
			<textarea name="textarea" style="border-radius: 7px; border-color: rgb(211,211,211);" maxlenght="300" rows="5" cols="30"></textarea>
			<div class="row buttons" style="text-align: right; ">
	 			<?php echo CHtml::Button('Añadir'); ?>
			</div>
		</div>
	</div>

	<div class="columna1">
		<div class="row">
			<label> Sectores de aplicación</label>
			<textarea name="textarea" style="border-radius: 7px; border-color: rgb(211,211,211);" maxlenght="300" rows="5" cols="30"></textarea>
			<div class="row buttons" style="text-align: right; ">
	 			<?php echo CHtml::Button('Añadir'); ?>
			</div>
		</div>
	</div>

	

	<div class="separador"> </div>

	<div class="row buttons" style="text-align: right; ">
		<input class="button" type="reset"  value="Borrar">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

	<div class="separador"> </div>

<?php $this->endWidget(); ?>

</div><!-- form -->