<?php
require_once(dirname(__FILE__).'/../../models/FormacionAcademica.php');

class formacionAcademicaTest extends PHPUnit_Framework_TestCase
{
	 public function testCreate(){
	 	$formacion= new FormacionAcademica;
	 	$formacion->idFormacionAcademica = 2;
	 	$formacion->formAcaIntensidadHoraria = 2;
	 	$formacion->formAcaFechaObtencionTitulo = "1993-08-28";
	 	$formacion->formAcaBecado = "si";
	 	$formacion->formAcaInstitucionOfreceBeca ="Universidad del Tolima";
	 	$formacion->formAcaNivelFormacion = "Pregrado/Universitario";
	 	$formacion->formAcaInstitucion = "Universidad del Tolima";
	 	$formacion->formAcaProgramaAcademico = "Ingeniería civil";
	 	$formacion->formAcaFechaInicio = "2011-01-24";
	 	$formacion->formAcaFechaFinalizacion = "2018-01-24";
	 	$formacion->formAcaTiempoFormacion = 10;
	 	$formacion->formAcaUnidadTiempoFormacion = "Semestre";
	 	//$formacion->formAcaPromedioPeriodos = 0.9;
	 	$formacion->formAcaCiudad_idCiudad = 24;
	 	$formacion->nombreIdioma = "Inglés";
	 	$formacion->nivelEscritura = "Aceptable";
	 	$formacion->nivelLectura = "Aceptable";
	 	$formacion->nivelHabla = "Aceptable";
	 	$formacion->nivelEscucha = "Aceptable";
	 	$formacion->formComTituloObtenido = "Especialista en Infraestructura";
	 	$formacion->formComNivelFormacion = "Cusros de corta duración";
	 	$formacion->formComInstitucion = "Universidad del Quindio";
	 	$formacion->formComProgramaAcademico = "Ingeniería civil";
	 	$formacion->formComFechaInicio = "2010-01-01";
	 	$formacion->formComFechaFinalizacon = "2010-12-31";
	 	$formacion->formComTiempoFormacion = 2;
	 	$formacion->formComUnidadTiempoFormacion ="Semestre";
	 	//$formacion->formComPromedioPeriodos = 1;
	 	$formacion->formComCiudad_idCiudad = 24;
	 	//$formacion->Persona_idPersona = 1;

	 	$this->assertTrue($formacion->save());
	 	$formacion->delete();
	 }

	 public function testBuscar(){
	 	$formacion= new FormacionAcademica;
	 	$formacion->idFormacionAcademica = 2;
	 	$formacion->formAcaIntensidadHoraria = 2;
	 	$formacion->formAcaFechaObtencionTitulo = "1993-08-28";
	 	$formacion->formAcaBecado = "si";
	 	$formacion->formAcaInstitucionOfreceBeca ="Universidad del Tolima";
	 	$formacion->formAcaNivelFormacion = "Pregrado/Universitario";
	 	$formacion->formAcaInstitucion = "Universidad del Tolima";
	 	$formacion->formAcaProgramaAcademico = "Ingeniería civil";
	 	$formacion->formAcaFechaInicio = "2011-01-24";
	 	$formacion->formAcaFechaFinalizacion = "2018-01-24";
	 	$formacion->formAcaTiempoFormacion = 10;
	 	$formacion->formAcaUnidadTiempoFormacion = "Semestre";
	 	//$formacion->formAcaPromedioPeriodos = 0.9;
	 	$formacion->formAcaCiudad_idCiudad = 24;
	 	$formacion->nombreIdioma = "Inglés";
	 	$formacion->nivelEscritura = "Aceptable";
	 	$formacion->nivelLectura = "Aceptable";
	 	$formacion->nivelHabla = "Aceptable";
	 	$formacion->nivelEscucha = "Aceptable";
	 	$formacion->formComTituloObtenido = "Especialista en Infraestructura";
	 	$formacion->formComNivelFormacion = "Cusros de corta duración";
	 	$formacion->formComInstitucion = "Universidad del Quindio";
	 	$formacion->formComProgramaAcademico = "Ingeniería civil";
	 	$formacion->formComFechaInicio = "2010-01-01";
	 	$formacion->formComFechaFinalizacon = "2010-12-31";
	 	$formacion->formComTiempoFormacion = 2;
	 	$formacion->formComUnidadTiempoFormacion ="Semestre";
	 	//$formacion->formComPromedioPeriodos = 1;
	 	$formacion->formComCiudad_idCiudad = 24;
	 	//$formacion->Persona_idPersona = 1;

	 	$this->assertTrue($formacion->save());

	 	$aux = $formacion->findByPk(2);
	 	$this->assertNotNull($aux);

	 	$formacion->delete();
	 }

	 public function testUpdate(){
	 	$formacion= new FormacionAcademica;
	 	$formacion->idFormacionAcademica = 2;
	 	$formacion->formAcaIntensidadHoraria = 2;
	 	$formacion->formAcaFechaObtencionTitulo = "1993-08-28";
	 	$formacion->formAcaBecado = "si";
	 	$formacion->formAcaInstitucionOfreceBeca ="Universidad del Tolima";
	 	$formacion->formAcaNivelFormacion = "Pregrado/Universitario";
	 	$formacion->formAcaInstitucion = "Universidad del Tolima";
	 	$formacion->formAcaProgramaAcademico = "Ingeniería civil";
	 	$formacion->formAcaFechaInicio = "2011-01-24";
	 	$formacion->formAcaFechaFinalizacion = "2018-01-24";
	 	$formacion->formAcaTiempoFormacion = 10;
	 	$formacion->formAcaUnidadTiempoFormacion = "Semestre";
	 	//$formacion->formAcaPromedioPeriodos = 0.9;
	 	$formacion->formAcaCiudad_idCiudad = 24;
	 	$formacion->nombreIdioma = "Inglés";
	 	$formacion->nivelEscritura = "Aceptable";
	 	$formacion->nivelLectura = "Aceptable";
	 	$formacion->nivelHabla = "Aceptable";
	 	$formacion->nivelEscucha = "Aceptable";
	 	$formacion->formComTituloObtenido = "Especialista en Infraestructura";
	 	$formacion->formComNivelFormacion = "Cusros de corta duración";
	 	$formacion->formComInstitucion = "Universidad del Quindio";
	 	$formacion->formComProgramaAcademico = "Ingeniería civil";
	 	$formacion->formComFechaInicio = "2010-01-01";
	 	$formacion->formComFechaFinalizacon = "2010-12-31";
	 	$formacion->formComTiempoFormacion = 2;
	 	$formacion->formComUnidadTiempoFormacion ="Semestre";
	 	//$formacion->formComPromedioPeriodos = 1;
	 	$formacion->formComCiudad_idCiudad = 24;
	 	//$formacion->Persona_idPersona = 1;

	 	$this->assertTrue($formacion->save());
	 	$aux = $formacion->findByPk(2);
	 	$aux->formAcaInstitucionOfreceBeca="Universidad la Gran Colombia";
	 	$aux->formAcaProgramaAcademico="Arquitectura";

	 	$this->assertTrue($formacion->update());

	 	$aux->delete();
	 }

	 public function testDelete(){
	 	$formacion= new FormacionAcademica;
	 	$formacion->idFormacionAcademica = 2;
	 	$formacion->formAcaIntensidadHoraria = 2;
	 	$formacion->formAcaFechaObtencionTitulo = "1993-08-28";
	 	$formacion->formAcaBecado = "si";
	 	$formacion->formAcaInstitucionOfreceBeca ="Universidad del Tolima";
	 	$formacion->formAcaNivelFormacion = "Pregrado/Universitario";
	 	$formacion->formAcaInstitucion = "Universidad del Tolima";
	 	$formacion->formAcaProgramaAcademico = "Ingeniería civil";
	 	$formacion->formAcaFechaInicio = "2011-01-24";
	 	$formacion->formAcaFechaFinalizacion = "2018-01-24";
	 	$formacion->formAcaTiempoFormacion = 10;
	 	$formacion->formAcaUnidadTiempoFormacion = "Semestre";
	 	//$formacion->formAcaPromedioPeriodos = 0.9;
	 	$formacion->formAcaCiudad_idCiudad = 24;
	 	$formacion->nombreIdioma = "Inglés";
	 	$formacion->nivelEscritura = "Aceptable";
	 	$formacion->nivelLectura = "Aceptable";
	 	$formacion->nivelHabla = "Aceptable";
	 	$formacion->nivelEscucha = "Aceptable";
	 	$formacion->formComTituloObtenido = "Especialista en Infraestructura";
	 	$formacion->formComNivelFormacion = "Cusros de corta duración";
	 	$formacion->formComInstitucion = "Universidad del Quindio";
	 	$formacion->formComProgramaAcademico = "Ingeniería civil";
	 	$formacion->formComFechaInicio = "2010-01-01";
	 	$formacion->formComFechaFinalizacon = "2010-12-31";
	 	$formacion->formComTiempoFormacion = 2;
	 	$formacion->formComUnidadTiempoFormacion ="Semestre";
	 	//$formacion->formComPromedioPeriodos = 1;
	 	$formacion->formComCiudad_idCiudad = 24;
	 	//$formacion->Persona_idPersona = 1;

	 	$this->assertTrue($formacion->save());

	 	$this->assertTrue($formacion->delete());
	 }
}
?>