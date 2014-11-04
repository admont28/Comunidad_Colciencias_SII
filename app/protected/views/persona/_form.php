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

	<?php echo $form->errorSummary($model); ?>

	<h2> Datos personales </h2>

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
		<!-- <?php echo $form->textField($model,'fechaNacimientoPersona'); ?> -->
		<?php echo $form->error($model,'fechaNacimientoPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estadoCivilPersona'); ?>
		<?php echo $form->dropDownList($model,'estadoCivilPersona',array('Soltero'=>'Soltero','Casado'=>'Casado', 'Viudo'=>'Viudo','Union Libre'=>'Union Libre'));?>
		<!-- <?php echo $form->textField($model,'estadoCivilPersona',array('size'=>45,'maxlength'=>45)); ?> -->
		<?php echo $form->error($model,'estadoCivilPersona'); ?>
	</div>

	<h2> Datos para ingresar a la comunidad </h2>

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

	

	<!-- ............................ DIRECCIÓN PROFESIONAL ................................. -->

	<h2> Dirección profesional</h2>

	<div class="row">
		<?php echo $form->labelEx($model,'dirProInstitucion'); ?>
		<?php echo $form->textField($model,'dirProInstitucion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'dirProInstitucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dirProDireccionInstitucion'); ?>
		<?php echo $form->textField($model,'dirProDireccionInstitucion',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'dirProDireccionInstitucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dirProBarrio'); ?>
		<?php echo $form->textField($model,'dirProBarrio',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'dirProBarrio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dirProCodigoPostal'); ?>
		<?php echo $form->textField($model,'dirProCodigoPostal'); ?>
		<?php echo $form->error($model,'dirProCodigoPostal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dirProApartadoPostal'); ?>
		<?php echo $form->textField($model,'dirProApartadoPostal'); ?>
		<?php echo $form->error($model,'dirProApartadoPostal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dirProTelefonoFijo'); ?>
		<?php echo $form->textField($model,'dirProTelefonoFijo'); ?>
		<?php echo $form->error($model,'dirProTelefonoFijo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dirProExtension'); ?>
		<?php echo $form->textField($model,'dirProExtension'); ?>
		<?php echo $form->error($model,'dirProExtension'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dirProEmailInstitucional'); ?>
		<?php echo $form->textField($model,'dirProEmailInstitucional',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'dirProEmailInstitucional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dirProPaginaInstitucional'); ?>
		<?php echo $form->textField($model,'dirProPaginaInstitucional',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'dirProPaginaInstitucional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dirProCiudad_idCiudad'); ?>
		<?php
			$datos = CHtml::listData(Ciudad::model()->findAll(),'idCiudad','nombreCiudad'); 
			echo $form->DropDownList($model,'dirProCiudad_idCiudad',$datos, array('empty'=>'--Seleccione una opcion--')); ?>
		<!-- <?php echo $form->textField($model,'dirProCiudad_idCiudad'); ?> -->
		<?php echo $form->error($model,'dirProCiudad_idCiudad'); ?>
	</div>

	<!-- ...................... DIRECCIÓN PERSONAL ............................... -->

	<h2> Dirección Personal </h2>

	<div class="row">
		<?php echo $form->labelEx($model,'dirPerDireccion'); ?>
		<?php echo $form->textField($model,'dirPerDireccion',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'dirPerDireccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dirPerBarrio'); ?>
		<?php echo $form->textField($model,'dirPerBarrio',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'dirPerBarrio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dirPerCodigoPostal'); ?>
		<?php echo $form->textField($model,'dirPerCodigoPostal'); ?>
		<?php echo $form->error($model,'dirPerCodigoPostal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dirPerTelefonoFijo'); ?>
		<?php echo $form->textField($model,'dirPerTelefonoFijo'); ?>
		<?php echo $form->error($model,'dirPerTelefonoFijo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dirPerTelefonoMovil'); ?>
		<?php echo $form->textField($model,'dirPerTelefonoMovil'); ?>
		<?php echo $form->error($model,'dirPerTelefonoMovil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dirPerApartadoPostal'); ?>
		<?php echo $form->textField($model,'dirPerApartadoPostal'); ?>
		<?php echo $form->error($model,'dirPerApartadoPostal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dirPerEmail'); ?>
		<?php echo $form->textField($model,'dirPerEmail',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'dirPerEmail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dirPerSitioWeb'); ?>
		<?php echo $form->textField($model,'dirPerSitioWeb',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'dirPerSitioWeb'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dirPerCiudad_idCiudad'); ?>
		<?php
			$datos = CHtml::listData(Ciudad::model()->findAll(),'idCiudad','nombreCiudad'); 
			echo $form->DropDownList($model,'dirPerCiudad_idCiudad',$datos, array('empty'=>'--Seleccione una opcion--')); ?>
		<!-- <?php echo $form->textField($model,'dirPerCiudad_idCiudad'); ?> -->
		<?php echo $form->error($model,'dirPerCiudad_idCiudad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->