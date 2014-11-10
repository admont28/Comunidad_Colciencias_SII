<?php
/* @var $this ProyectosController */
/* @var $model Proyectos */

$this->breadcrumbs=array(
	'Proyectos'=>array('index'),
	'Administrar',
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#proyectos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="titulo1">
	<h2>Proyectos</h2>
</div>

<!--<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>
-->
<?php echo CHtml::link('Búsqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'proyectos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'cssFile'=>Yii::app()->request->baseUrl.'/css/gridview.css',
	'columns'=>array(
		'idProyectos',
		'nombreProyecto',
		'tipoProyecto',
		'resumen',
		/*
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
		'integrantesProyecto',
		'certificado',
		'institucionesVinculadas',
		'produccionCTI',
		 */
		array(
			'class'=>'CButtonColumn',
		),
))); ?>

<h2 style="text-align: right;"> 
	<?php echo CHtml::button('Agregar', array('submit' => array('Proyectos/create'),'class'=>'button')); ?> 
</h1>
