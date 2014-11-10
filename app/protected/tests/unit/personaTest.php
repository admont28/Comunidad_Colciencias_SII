<?php

//include '/../../conrtollers/PersonaController.php';
//include '/../../models/Persona.php';

//require_once(dirname(__FILE__).'/../../controllers/PersonaController.php');
require_once(dirname(__FILE__).'/../../models/Persona.php');

class personaTest extends PHPUnit_Framework_TestCase
{
	 public function testCreate(){
	 	$persona= new Persona;
	 	$persona->idPersona=10;
	 	$persona->cedulaPersona="1094937";
	 	$persona->nombrePersona="danilo";
	 	$persona->primerApellidoPersona="Perez";
	 	$persona->segundoApellidoPersona="Fernandez";
	 	$persona->fechaNacimientoPersona="1993-11-11";
	 	$persona->tipoDocumentoPersona="Cedula de Ciudadania";
	 	$persona->nacionalidadPais_idPais = 43;
	 	$persona->expediciónPais_idPais= 43;
	 	$persona->nacimientoPais_idPais = 43;
	 	$persona->nacimientoDepartamento_idDepartamento = 24;
	 	$persona->nacimientoCiudad_idCiudad = 24;
	 	$persona->fechaExpedicionDoc="1994-11-11";
	 	$persona->sexoPersona="Masculino";
	 	$persona->usuarioSIICPersona="admon";
	 	$persona->contraseñaSIICPersona="admon";
	 	$persona->dirProInstitucion="UQ";
	 	$persona->dirProDireccionInstitucion="UQ";
	 	$persona->dirProBarrio="UQ";
	 	$persona->dirProTelefonoFijo=73737;
	 	$persona->dirProEmailInstitucional="admon@uq.com";
	 	$persona->dirProPais_idPais=43;
	 	$persona->dirProDepartamento_idDepartamento=24;
	 	$persona->dirProCiudad_idCiudad=24;
	 	$persona->dirPerDireccion="Barrio";
	 	$persona->dirPerBarrio="Barrio";
	 	$persona->dirPerTelefonoFijo=62626;
		$persona->dirPerEmail="admon@hotmail.com";
	 	$persona->dirPerPais_idPais=43;
	 	$persona->dirPerDepartamento_idDepartamento=24;
	 	$persona->dirPerCiudad_idCiudad=24;

	 	$this->assertTrue($persona->save());
	 	$persona->delete();
	 }

	 public function testBuscar(){
	 	$persona = new Persona;
	 	$persona->idPersona=4;
	 	$persona->cedulaPersona="109493";
	 	$persona->nombrePersona="Andres";
	 	$persona->primerApellidoPersona="Montoya";
	 	$persona->segundoApellidoPersona="Fernandez";
	 	$persona->fechaNacimientoPersona="1993-11-11";
	 	$persona->tipoDocumentoPersona="Cedula de Ciudadania";
	 	$persona->nacionalidadPais_idPais = 43;
	 	$persona->expediciónPais_idPais= 43;
	 	$persona->nacimientoPais_idPais = 43;
	 	$persona->nacimientoDepartamento_idDepartamento = 24;
	 	$persona->nacimientoCiudad_idCiudad = 24;
	 	$persona->fechaExpedicionDoc="1994-11-11";
	 	$persona->sexoPersona="Masculino";
	 	$persona->usuarioSIICPersona="admon";
	 	$persona->contraseñaSIICPersona="admon";
	 	$persona->dirProInstitucion="UQ";
	 	$persona->dirProDireccionInstitucion="UQ";
	 	$persona->dirProBarrio="UQ";
	 	$persona->dirProTelefonoFijo=73737;
	 	$persona->dirProEmailInstitucional="admon@uq.com";
	 	$persona->dirProPais_idPais=43;
	 	$persona->dirProDepartamento_idDepartamento=24;
	 	$persona->dirProCiudad_idCiudad=24;
	 	$persona->dirPerDireccion="Barrio";
	 	$persona->dirPerBarrio="Barrio";
	 	$persona->dirPerTelefonoFijo=62626;
		$persona->dirPerEmail="admon@hotmail.com";
	 	$persona->dirPerPais_idPais=43;
	 	$persona->dirPerDepartamento_idDepartamento=24;
	 	$persona->dirPerCiudad_idCiudad=24;

	 	$this->assertTrue($persona->save());

	 	$aux = $persona->findByPk(4);
	 	$this->assertNotNull($aux);

	 	$persona->delete();
	 }

	 public function testUpdate(){
	 	$persona = new Persona;
	 	$persona->idPersona=5;
	 	$persona->cedulaPersona="109493";
	 	$persona->nombrePersona="Andres";
	 	$persona->primerApellidoPersona="Montoya";
	 	$persona->segundoApellidoPersona="Fernandez";
	 	$persona->fechaNacimientoPersona="1993-11-11";
	 	$persona->tipoDocumentoPersona="Cedula de Ciudadania";
	 	$persona->nacionalidadPais_idPais = 43;
	 	$persona->expediciónPais_idPais= 43;
	 	$persona->nacimientoPais_idPais = 43;
	 	$persona->nacimientoDepartamento_idDepartamento = 24;
	 	$persona->nacimientoCiudad_idCiudad = 24;
	 	$persona->fechaExpedicionDoc="1994-11-11";
	 	$persona->sexoPersona="Masculino";
	 	$persona->usuarioSIICPersona="admon";
	 	$persona->contraseñaSIICPersona="admon";
	 	$persona->dirProInstitucion="UQ";
	 	$persona->dirProDireccionInstitucion="UQ";
	 	$persona->dirProBarrio="UQ";
	 	$persona->dirProTelefonoFijo=73737;
	 	$persona->dirProEmailInstitucional="admon@uq.com";
	 	$persona->dirProPais_idPais=43;
	 	$persona->dirProDepartamento_idDepartamento=24;
	 	$persona->dirProCiudad_idCiudad=24;
	 	$persona->dirPerDireccion="Barrio";
	 	$persona->dirPerBarrio="Barrio";
	 	$persona->dirPerTelefonoFijo=62626;
		$persona->dirPerEmail="admon@hotmail.com";
	 	$persona->dirPerPais_idPais=43;
	 	$persona->dirPerDepartamento_idDepartamento=24;
	 	$persona->dirPerCiudad_idCiudad=24;

	 	$this->assertTrue($persona->save());
	 	$aux = $persona->findByPk(5);
	 	$aux->nombrePersona="Alex";
	 	$aux->primerApellidoPersona="Vargas";

	 	$this->assertTrue($persona->update());

	 	$aux->delete();
	 }

	 public function testDelete(){
	 	$persona = new Persona;
	 	$persona->idPersona=5;
	 	$persona->cedulaPersona="109493";
	 	$persona->nombrePersona="Andres";
	 	$persona->primerApellidoPersona="Montoya";
	 	$persona->segundoApellidoPersona="Fernandez";
	 	$persona->fechaNacimientoPersona="1993-11-11";
	 	$persona->tipoDocumentoPersona="Cedula de Ciudadania";
	 	$persona->nacionalidadPais_idPais = 43;
	 	$persona->expediciónPais_idPais= 43;
	 	$persona->nacimientoPais_idPais = 43;
	 	$persona->nacimientoDepartamento_idDepartamento = 24;
	 	$persona->nacimientoCiudad_idCiudad = 24;
	 	$persona->fechaExpedicionDoc="1994-11-11";
	 	$persona->sexoPersona="Masculino";
	 	$persona->usuarioSIICPersona="admon";
	 	$persona->contraseñaSIICPersona="admon";
	 	$persona->dirProInstitucion="UQ";
	 	$persona->dirProDireccionInstitucion="UQ";
	 	$persona->dirProBarrio="UQ";
	 	$persona->dirProTelefonoFijo=73737;
	 	$persona->dirProEmailInstitucional="admon@uq.com";
	 	$persona->dirProPais_idPais=43;
	 	$persona->dirProDepartamento_idDepartamento=24;
	 	$persona->dirProCiudad_idCiudad=24;
	 	$persona->dirPerDireccion="Barrio";
	 	$persona->dirPerBarrio="Barrio";
	 	$persona->dirPerTelefonoFijo=62626;
		$persona->dirPerEmail="admon@hotmail.com";
	 	$persona->dirPerPais_idPais=43;
	 	$persona->dirPerDepartamento_idDepartamento=24;
	 	$persona->dirPerCiudad_idCiudad=24;

	 	$this->assertTrue($persona->save());

	 	$this->assertTrue($persona->delete());
	 }
}
?>