<?php
/* @var $this PersonaController */
/* @var $model Persona */

$this->breadcrumbs=array(
	'Personas'=>array('index'),
	$model->idPersona,
);

$this->menu=array(
	array('label'=>'List Persona', 'url'=>array('index')),
	array('label'=>'Create Persona', 'url'=>array('create')),
	array('label'=>'Update Persona', 'url'=>array('update', 'id'=>$model->idPersona)),
	array('label'=>'Delete Persona', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPersona),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Persona', 'url'=>array('admin')),
);
?>

<h1>View Persona #<?php echo $model->idPersona; ?></h1>

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
