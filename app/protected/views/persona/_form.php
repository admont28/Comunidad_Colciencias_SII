<?php
/* @var $this PersonaController */
/* @var $model Persona */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'persona-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary(array($model,$modelDireccionPersonal,$modelDireccionProfesional)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cedulaPersona'); ?>
		<?php echo $form->textField($model,'cedulaPersona',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'cedulaPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombrePersona'); ?>
		<?php echo $form->textField($model,'nombrePersona',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombrePersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'primerApellidoPersona'); ?>
		<?php echo $form->textField($model,'primerApellidoPersona',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'primerApellidoPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'segundoApellidoPersona'); ?>
		<?php echo $form->textField($model,'segundoApellidoPersona',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'segundoApellidoPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreCitasBliblioPersona'); ?>
		<?php echo $form->textField($model,'nombreCitasBliblioPersona',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'nombreCitasBliblioPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoDocumentoPersona'); ?>
		<?php echo $form->dropDownList($model,'tipoDocumentoPersona',array('Cédula de Ciudadanía'=>'Cédula de Ciudadanía','Cédula de Extranjería'=>'Cédula de Extranjería', 'Tarjeta de Identidad'=>'Tarjeta de Identidad','Pasaporte'=>'Pasaporte'));?>
		<!-- <?php echo $form->textField($model,'tipoDocumentoPersona',array('size'=>25,'maxlength'=>25)); ?> -->
		<?php echo $form->error($model,'tipoDocumentoPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nacionalidadPais_idPais'); ?>
		<?php
			$datos = CHtml::listData(Pais::model()->findAll(),'idPais','nombrePais'); 
			echo $form->DropDownList($model,'nacionalidadPais_idPais',$datos, array('empty'=>'--Seleccione una opcion--')); ?>
		<!-- <?php echo $form->textField($model,'nacionalidadPais_idPais'); ?> -->
		<?php echo $form->error($model,'nacionalidadPais_idPais'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'expediciónPais_idPais'); ?>
		<?php
			$datos = CHtml::listData(Pais::model()->findAll(),'idPais','nombrePais'); 
			echo $form->DropDownList($model,'expediciónPais_idPais',$datos, array('empty'=>'--Seleccione una opcion--')); ?>
		<!-- <?php echo $form->textField($model,'expediciónPais_idPais'); ?> -->
		<?php echo $form->error($model,'expediciónPais_idPais'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaExpedicionDoc'); ?>
		 <?php
		  $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		   'model'=>$model,
		   'attribute'=>'fechaExpedicionDoc',
		   'value'=>$model->fechaExpedicionDoc,
		   'language' => 'es',
		   'htmlOptions' => array('readonly'=>"readonly"),
		   'options'=>array(
		    'autoSize'=>true,
		    'defaultDate'=>$model->fechaExpedicionDoc,
		    'dateFormat'=>'dd-mm-yyy',
		    'buttonImage'=>Yii::app()->baseUrl.'/images/calendario.jpg',
		    'buttonImageOnly'=>true,
		    'buttonText'=>'Fecha',
		    'selectOtherMonths'=>true,
		    'showAnim'=>'slide',
		    'showButtonPanel'=>true,
		    'showOn'=>'button', 
		    'showOtherMonths'=>true, 
		    'changeMonth' => 'true', 
		    'changeYear' => 'true', 
		    'minDate'=>'date("d-m-yyyy")', 
		    'maxDate'=> "+20Y",
		    ),
		  )); 
		 ?>
		 <?php echo $form->error($model,'fechaExpedicionDoc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sexoPersona'); ?>
		<?php echo $form->dropDownList($model,'sexoPersona',array('Masculino'=>'Masculino','Femenino'=>'Femenino'));?>
		<!-- <?php echo $form->textField($model,'sexoPersona',array('size'=>9,'maxlength'=>9)); ?> -->
		<?php echo $form->error($model,'sexoPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nacimientoCiudad_idCiudad'); ?>
		<?php
			$datos = CHtml::listData(Ciudad::model()->findAll(),'idCiudad','nombreCiudad'); 
			echo $form->DropDownList($model,'nacimientoCiudad_idCiudad',$datos, array('empty'=>'--Seleccione una opcion--')); ?>
		<!-- <?php echo $form->textField($model,'nacimientoCiudad_idCiudad'); ?> -->
		<?php echo $form->error($model,'nacimientoCiudad_idCiudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaNacimientoPersona'); ?>
		<?php
		  $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		   'model'=>$model,
		   'attribute'=>'fechaNacimientoPersona',
		   'value'=>$model->fechaNacimientoPersona,
		   'language' => 'es',
		   'htmlOptions' => array('readonly'=>"readonly"),
		   'options'=>array(
		    'autoSize'=>true,
		    'defaultDate'=>$model->fechaNacimientoPersona,
		    'dateFormat'=>'dd-mm-yyy',
		    'buttonImage'=>Yii::app()->baseUrl.'/images/calendario.jpg',
		    'buttonImageOnly'=>true,
		    'buttonText'=>'Fecha',
		    'selectOtherMonths'=>true,
		    'showAnim'=>'slide',
		    'showButtonPanel'=>true,
		    'showOn'=>'button', 
		    'showOtherMonths'=>true, 
		    'changeMonth' => 'true', 
		    'changeYear' => 'true', 
		    'minDate'=>'date("d-m-yyyy")', 
		    'maxDate'=> "+20Y",
		    ),
		  )); 
		 ?>
		<!-- <?php echo $form->textField($model,'fechaNacimientoPersona'); ?> -->
		<?php echo $form->error($model,'fechaNacimientoPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuarioSIICPersona'); ?>
		<?php echo $form->textField($model,'usuarioSIICPersona',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'usuarioSIICPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contraseñaSIICPersona'); ?>
		<?php echo $form->passwordField($model,'contraseñaSIICPersona',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'contraseñaSIICPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estadoCivilPersona'); ?>
		<?php echo $form->dropDownList($model,'estadoCivilPersona',array('Soltero'=>'Soltero','Casado'=>'Casado', 'Viudo'=>'Viudo','Union Libre'=>'Union Libre'));?>
		<!-- <?php echo $form->textField($model,'estadoCivilPersona',array('size'=>45,'maxlength'=>45)); ?> -->
		<?php echo $form->error($model,'estadoCivilPersona'); ?>
	</div>


	<!--- COMIENZA LA OTRA PARTE DE LA PERSONA (DIRECCIÓN PERSONAL) -->

	<!-- 
	<div class="row">
		<?php echo $form->labelEx($modelDireccionPersonal,'idDireccionPersonal'); ?>
		<?php echo $form->textField($modelDireccionPersonal,'idDireccionPersonal'); ?>
		<?php echo $form->error($modelDireccionPersonal,'idDireccionPersonal'); ?>
	</div>
	-->

	<div class="row">
		<?php echo $form->labelEx($modelDireccionPersonal,'direccion'); ?>
		<?php echo $form->textField($modelDireccionPersonal,'direccion',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($modelDireccionPersonal,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelDireccionPersonal,'barrio'); ?>
		<?php echo $form->textField($modelDireccionPersonal,'barrio',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($modelDireccionPersonal,'barrio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelDireccionPersonal,'codigoPostal'); ?>
		<?php echo $form->textField($modelDireccionPersonal,'codigoPostal'); ?>
		<?php echo $form->error($modelDireccionPersonal,'codigoPostal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelDireccionPersonal,'Ciudad_idCiudad'); ?>
		<?php
			$datos = CHtml::listData(Ciudad::model()->findAll(),'idCiudad','nombreCiudad'); 
			echo $form->DropDownList($modelDireccionPersonal,'Ciudad_idCiudad',$datos, array('empty'=>'--Seleccione una opcion--')); ?>
		<!-- <?php echo $form->textField($modelDireccionPersonal,'Ciudad_idCiudad'); ?> -->
		<?php echo $form->error($modelDireccionPersonal,'Ciudad_idCiudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelDireccionPersonal,'telefonoFijo'); ?>
		<?php echo $form->textField($modelDireccionPersonal,'telefonoFijo'); ?>
		<?php echo $form->error($modelDireccionPersonal,'telefonoFijo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelDireccionPersonal,'telefonoMovil'); ?>
		<?php echo $form->textField($modelDireccionPersonal,'telefonoMovil'); ?>
		<?php echo $form->error($modelDireccionPersonal,'telefonoMovil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelDireccionPersonal,'apartadoPostal'); ?>
		<?php echo $form->textField($modelDireccionPersonal,'apartadoPostal'); ?>
		<?php echo $form->error($modelDireccionPersonal,'apartadoPostal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelDireccionPersonal,'email'); ?>
		<?php echo $form->textField($modelDireccionPersonal,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($modelDireccionPersonal,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelDireccionPersonal,'sitioWeb'); ?>
		<?php echo $form->textField($modelDireccionPersonal,'sitioWeb',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($modelDireccionPersonal,'sitioWeb'); ?>
	</div>


	<!--- COMIENZA LA OTRA PARTE DE LA PERSONA (DIRECCIÓN PROFESIONAL) -->

	<!--
	<div class="row">
		<?php echo $form->labelEx($modelDireccionProfesional,'idDireccionProfesional'); ?>
		<?php echo $form->textField($modelDireccionProfesional,'idDireccionProfesional'); ?>
		<?php echo $form->error($modelDireccionProfesional,'idDireccionProfesional'); ?>
	</div>
	-->

	<div class="row">
		<?php echo $form->labelEx($modelDireccionProfesional,'institucion'); ?>
		<?php echo $form->textField($modelDireccionProfesional,'institucion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($modelDireccionProfesional,'institucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelDireccionProfesional,'direccionInstitucion'); ?>
		<?php echo $form->textField($modelDireccionProfesional,'direccionInstitucion',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($modelDireccionProfesional,'direccionInstitucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelDireccionProfesional,'barrio'); ?>
		<?php echo $form->textField($modelDireccionProfesional,'barrio',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($modelDireccionProfesional,'barrio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelDireccionProfesional,'codigoPostal'); ?>
		<?php echo $form->textField($modelDireccionProfesional,'codigoPostal'); ?>
		<?php echo $form->error($modelDireccionProfesional,'codigoPostal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelDireccionProfesional,'apartadoPostal'); ?>
		<?php echo $form->textField($modelDireccionProfesional,'apartadoPostal'); ?>
		<?php echo $form->error($modelDireccionProfesional,'apartadoPostal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelDireccionProfesional,'Ciudad_idCiudad'); ?>
		<?php
			$datos = CHtml::listData(Ciudad::model()->findAll(),'idCiudad','nombreCiudad'); 
			echo $form->DropDownList($modelDireccionProfesional,'Ciudad_idCiudad',$datos, array('empty'=>'--Seleccione una opcion--')); ?>
		<!-- <?php echo $form->textField($modelDireccionProfesional,'Ciudad_idCiudad'); ?> -->
		<?php echo $form->error($modelDireccionProfesional,'Ciudad_idCiudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelDireccionProfesional,'telefonoFijo'); ?>
		<?php echo $form->textField($modelDireccionProfesional,'telefonoFijo'); ?>
		<?php echo $form->error($modelDireccionProfesional,'telefonoFijo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelDireccionProfesional,'extension'); ?>
		<?php echo $form->textField($modelDireccionProfesional,'extension'); ?>
		<?php echo $form->error($modelDireccionProfesional,'extension'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelDireccionProfesional,'emailInstitucional'); ?>
		<?php echo $form->textField($modelDireccionProfesional,'emailInstitucional',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($modelDireccionProfesional,'emailInstitucional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelDireccionProfesional,'paginaInstitucional'); ?>
		<?php echo $form->textField($modelDireccionProfesional,'paginaInstitucional',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($modelDireccionProfesional,'paginaInstitucional'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?> 
		<!-- <?php echo CHtml::submitButton('Guardar'); ?> -->
	</div>






	<!-- 
	<div class="row">
		<?php echo $form->labelEx($model,'DireccionPersonal_idDireccionPersonal'); ?>
		<?php echo $form->textField($model,'DireccionPersonal_idDireccionPersonal'); ?>
		<?php echo $form->error($model,'DireccionPersonal_idDireccionPersonal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DireccionProfesional_idDireccionProfesional'); ?>
		<?php echo $form->textField($model,'DireccionProfesional_idDireccionProfesional'); ?>
		<?php echo $form->error($model,'DireccionProfesional_idDireccionProfesional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FormacionAcademica_idFormacionAcademica'); ?>
		<?php echo $form->textField($model,'FormacionAcademica_idFormacionAcademica'); ?>
		<?php echo $form->error($model,'FormacionAcademica_idFormacionAcademica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Idioma_idIdioma'); ?>
		<?php echo $form->textField($model,'Idioma_idIdioma'); ?>
		<?php echo $form->error($model,'Idioma_idIdioma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FormacionComplementaria_idFormacionComplementaria'); ?>
		<?php echo $form->textField($model,'FormacionComplementaria_idFormacionComplementaria'); ?>
		<?php echo $form->error($model,'FormacionComplementaria_idFormacionComplementaria'); ?>
	</div>

	-->

	<?php $this->endWidget(); ?>

</div><!-- form -->
	