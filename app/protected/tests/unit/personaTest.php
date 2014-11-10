<?php

include '/../../conrtollers/PersonaController.php';
include '/../../models/Persona.php';

class personaTest extends PHPUnit_Framework_TestCase
{
	 public function testCreate(){
	 	$persona= new Persona;
	 	$persona->idPersona=3;
	 	$persona->nombrePersona="danilo";
	 	$persona->primerApellidoPersona="Perez";
	 	$persona->segundoApellidoPersona="Fernandez";
	 	$persona->fechaNacimientoPersona="1993-11-11";

	 	$this->assertTrue($persona->save());
	 }

	 public function testBuscar(){
	 	$persona = new Persona;
	 	$aux = $persona->findByPk(1);
	 	$this->assertNotNull($aux);
	 }

	 public function testUpdate(){
	 	$persona= new Persona;
	 	$persona->idPersona=4;
	 	$persona->nombrePersona="danilo";
	 	$persona->primerApellidoPersona="Perez";
	 	$persona->segundoApellidoPersona="Fernandez";
	 	$persona->fechaNacimientoPersona="1993-11-11";;

	 	$this->assertTrue($persona->save());

	 	$persona->nombrePersona="Andres";
	 	$persona->primerApellidoPersona="Perez";

	 	$hits->assertTrue($persona->update);
	 }
}
?>