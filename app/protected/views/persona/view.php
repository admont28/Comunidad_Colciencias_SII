<?php
/* @var $this PersonaController */
/* @var $model Persona */

$this->breadcrumbs=array(
	'Personas'=>array('admin'),
	$model->idPersona,
);

?>


<h1>Ver Persona #<?php echo $model->idPersona; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPersona',
		'cedulaPersona',
		'nombrePersona',
		'primerApellidoPersona',
		'segundoApellidoPersona',
		'nombreCitasBliblioPersona',
		'tipoDocumentoPersona',
		'nacionalidadPais_idPais',
		'expediciónPais_idPais',
		'fechaExpedicionDoc',
		'sexoPersona',
		'nacimientoCiudad_idCiudad',
		'fechaNacimientoPersona',
		'usuarioSIICPersona',
		'contraseñaSIICPersona',
		'estadoCivilPersona',
		'dirProInstitucion',
		'dirProDireccionInstitucion',
		'dirProBarrio',
		'dirProCodigoPostal',
		'dirProApartadoPostal',
		'dirProTelefonoFijo',
		'dirProExtension',
		'dirProEmailInstitucional',
		'dirProPaginaInstitucional',
		'dirProCiudad_idCiudad',
		'dirPerDireccion',
		'dirPerBarrio',
		'dirPerCodigoPostal',
		'dirPerTelefonoFijo',
		'dirPerTelefonoMovil',
		'dirPerApartadoPostal',
		'dirPerEmail',
		'dirPerSitioWeb',
		'dirPerCiudad_idCiudad',
	),
)); 

?>
