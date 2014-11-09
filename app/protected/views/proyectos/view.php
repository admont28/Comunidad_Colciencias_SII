<?php
/* @var $this ProyectosController */
/* @var $model Proyectos */

$this->breadcrumbs=array(
	'Proyectoses'=>array('index'),
	$model->idProyectos,
);

$this->menu=array(
	array('label'=>'Lista de proyectos', 'url'=>array('index')),
	array('label'=>'Crear un proyecto', 'url'=>array('crear')),
	array('label'=>'Actualizar un proyecto', 'url'=>array('actualizar', 'id'=>$model->idProyectos)),
	array('label'=>'Eliminar un proyecto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idProyectos),'confirm'=>'Esta seguro que desea eliminar este proyecto?')),
	array('label'=>'Administrar Proyectos', 'url'=>array('admin')),
);
?>

<h1>View Proyectos #<?php echo $model->idProyectos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idProyectos',
		'nombreProyecto',
		'tipoProyecto',
		'tipoFinanciacion',
		'fuentesFinanciacion',
		'participacionProyecto',
		'institucion',
		'participacionInst',
		'valorContrapartida',
		'numeroActoAdministrativo',
		'anioInicio',
		'mesInicio',
		'anioFin',
		'mesFin',
		'resumen',
		'integrantesProyecto',
		'certificado',
		'institucionesVinculadas',
		'produccionCTI',
	),
)); ?>
