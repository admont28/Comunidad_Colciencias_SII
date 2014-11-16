<?php

require_once(dirname(__FILE__).'/../../models/Proyectos.php');

class proyectoTest extends PHPUnit_Framework_TestCase
{
	 public function testCreate(){
	 	$proyecto= new Proyectos;
	 	$proyecto->idProyectos=1;
	 	$proyecto->nombreProyecto = "Birikaira";
	 	$proyecto->tipoProyecto = "Investigación y desarrollo";
	 	$proyecto->tipoFinanciacion ="Financiado";
	 	$proyecto->fuentesFinanciacion ="Interna";
	 	$proyecto->participacionProyecto ="Coinvestigador";
	 	$proyecto->institucion = "UT";
	 	$proyecto->participacionInst = "Financiadora";
	 	$proyecto->valorContrapartida = 50000;
	 	$proyecto->numeroActoAdministrativo = 3;
	 	$proyecto->anioInicio = "2009";
	 	$proyecto->mesInicio="Octubre";
	 	$proyecto->anioFin="2011";
	 	$proyecto->mesFin="Diciembre";
	 	$proyecto->resumen="Casas y Apartamentos";
	 	$proyecto->integrantesProyecto="Admont";
	 	$proyecto->certificado="mimamamemima.php";
	 	$proyecto->institucionesVinculadas="Muchas";
	 	$proyecto->produccionCTI="página";
	 	$proyecto->duenoPersona_idPersona=1;

	 	$this->assertTrue($proyecto->save());
	 	$proyecto->delete();
	 }

	 public function testBuscar(){
	 	$proyecto= new Proyectos;
	 	$proyecto->idProyectos=1;
	 	$proyecto->nombreProyecto = "Birikaira";
	 	$proyecto->tipoProyecto = "Investigación y desarrollo";
	 	$proyecto->tipoFinanciacion ="Financiado";
	 	$proyecto->fuentesFinanciacion ="Interna";
	 	$proyecto->participacionProyecto ="Coinvestigador";
	 	$proyecto->institucion = "UT";
	 	$proyecto->participacionInst = "Financiadora";
	 	$proyecto->valorContrapartida = 50000;
	 	$proyecto->numeroActoAdministrativo = 3;
	 	$proyecto->anioInicio = "2009";
	 	$proyecto->mesInicio="Octubre";
	 	$proyecto->anioFin="2011";
	 	$proyecto->mesFin="Diciembre";
	 	$proyecto->resumen="Casas y Apartamentos";
	 	$proyecto->integrantesProyecto="Admont";
	 	$proyecto->certificado="mimamamemima.php";
	 	$proyecto->institucionesVinculadas="Muchas";
	 	$proyecto->produccionCTI="página";
	 	$proyecto->duenoPersona_idPersona=1;

	 	$this->assertTrue($proyecto->save());

	 	$aux = $proyecto->findByPk(1);
	 	$this->assertNotNull($aux);

	 	$proyecto->delete();
	 }

	 public function testUpdate(){
	 	$proyecto= new Proyectos;
	 	$proyecto->idProyectos=1;
	 	$proyecto->nombreProyecto = "Birikaira";
	 	$proyecto->tipoProyecto = "Investigación y desarrollo";
	 	$proyecto->tipoFinanciacion ="Financiado";
	 	$proyecto->fuentesFinanciacion ="Interna";
	 	$proyecto->participacionProyecto ="Coinvestigador";
	 	$proyecto->institucion = "UT";
	 	$proyecto->participacionInst = "Financiadora";
	 	$proyecto->valorContrapartida = 50000;
	 	$proyecto->numeroActoAdministrativo = 3;
	 	$proyecto->anioInicio = "2009";
	 	$proyecto->mesInicio="Octubre";
	 	$proyecto->anioFin="2011";
	 	$proyecto->mesFin="Diciembre";
	 	$proyecto->resumen="Casas y Apartamentos";
	 	$proyecto->integrantesProyecto="Admont";
	 	$proyecto->certificado="mimamamemima.php";
	 	$proyecto->institucionesVinculadas="Muchas";
	 	$proyecto->produccionCTI="página";
	 	$proyecto->duenoPersona_idPersona=1;

	 	$this->assertTrue($proyecto->save());
	 	$aux = $proyecto->findByPk(1);
	 	$aux->nombreProyecto="Arreboles2";
	 	$aux->tipoProyecto="Investigación, desarrollo e innovación";

	 	$this->assertTrue($proyecto->update());

	 	$aux->delete();
	 }

	 public function testDelete(){
	 	$proyecto= new Proyectos;
	 	$proyecto->idProyectos=1;
	 	$proyecto->nombreProyecto = "Birikaira";
	 	$proyecto->tipoProyecto = "Investigación y desarrollo";
	 	$proyecto->tipoFinanciacion ="Financiado";
	 	$proyecto->fuentesFinanciacion ="Interna";
	 	$proyecto->participacionProyecto ="Coinvestigador";
	 	$proyecto->institucion = "UT";
	 	$proyecto->participacionInst = "Financiadora";
	 	$proyecto->valorContrapartida = 50000;
	 	$proyecto->numeroActoAdministrativo = 3;
	 	$proyecto->anioInicio = "2009";
	 	$proyecto->mesInicio="Octubre";
	 	$proyecto->anioFin="2011";
	 	$proyecto->mesFin="Diciembre";
	 	$proyecto->resumen="Casas y Apartamentos";
	 	$proyecto->integrantesProyecto="Admont";
	 	$proyecto->certificado="mimamamemima.php";
	 	$proyecto->institucionesVinculadas="Muchas";
	 	$proyecto->produccionCTI="página";
	 	$proyecto->duenoPersona_idPersona=1;

	 	$this->assertTrue($proyecto->save());

	 	$this->assertTrue($proyecto->delete());
	 }
}
?>