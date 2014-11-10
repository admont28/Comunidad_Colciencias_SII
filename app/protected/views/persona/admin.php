<?php
/* @var $this PersonaController */
/* @var $model Persona */

$this->breadcrumbs=array(
	'Personas'=>array('admin'),
	'Administrar',
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#persona-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="titulo1">
	<h2>Persona</h2>
</div>
<p>
Opcionalmente, puede introducir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<!--
<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>
-->

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'persona-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'cssFile'=> Yii::app()->request->baseUrl.'/css/gridview.css',
	'columns'=>array(
		'idPersona',
		'cedulaPersona',
		'nombrePersona',
		'primerApellidoPersona',
		'segundoApellidoPersona',
		'nombreCitasBliblioPersona',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update} {delete}',
		),
))); ?>

<h2 style="text-align: right;"> 
	<?php echo CHtml::button('Agregar', array('submit' => array('Persona/create'),'class'=>'button')); ?> 
</h1>
