<?php
require_once (" bootstrap . php ");
 
clase  UsersTest  extiende  CDbTestCase  {
 
pública  función testSaveUser ()  {
// variables de preparación
$ Email =  " @ test de prueba . com ";
$ Password =  " 1231231 ";
$ Nombre real =  " prueba ";
 
// Llamar a la función saveUser en modelo Usuarios, debe devolver verdadero
// Si devuelve true debajo afirmación pasa, de lo contrario failes.
$ This - y gt ; assertTrue ( Usuarios :: modelo () - y gt ; saveUser ( $ email , $ contraseña , $ nombre real ));
 
// Ahora conseguir las todas las filas con el correo electrónico test@test.com
// FindAll función devuelve todas las filas de una matriz mathes los criterios
 
$ Filas =  Usuarios :: modelo () - y gt ; findAll (" email =: correo electrónico ", array (": correo electrónico "= & gt ; $ email ));
// Comprobar que debería ser uno de los elementos en filas matriz
$ This - y gt ; assertEquals ( count ( $ filas ),  1 );
// Comprobar que el correo electrónico, contraseña y nombre real se guarda correctamente 
$ This - y gt ; assertEquals ( $ filas [ 0 ] - gt ; correo electrónico , $ email );
$ This - y gt ; assertEquals ( $ filas [ 0 ] - gt ; de contraseña , $ password );
$ This - y gt ; assertEquals ( $ filas [ 0 ] - gt ; realname , $ nombre real );
 
tratar  {
// Tratar de registrar misma dirección de e-mail, se debe lanzar una excepción y debe 
// Saltar el siguiente afirmación y debe ejecutar el bloque catch.
Usuarios :: modelo () - y gt ; saveUser ( $ email ,  " 1232424 ",  " prueba ");
$ This - y gt ; assertTrue ( falso );
}
captura  ( CdbException $ exp ) {
$ This - y gt ; assertTrue ( verdadero );
}
 
}
 
pública  de función testMissingParameters ()  {
 
// Tratar de registrarse con los parámetros que faltan 
$ This - y gt ; assertFalse ( Usuarios :: modelo () - y gt ; saveUser (" dene @ deneme . com ",  "",  ""));
$ This - y gt ; assertFalse ( Usuarios :: modelo () - y gt ; saveUser ("",  " 1232424 ",  ""));
$ This - y gt ; assertFalse ( Usuarios :: modelo () - y gt ; saveUser ("",  "",  ""));
$ This - y gt ; assertFalse ( Usuarios :: modelo () - y gt ; saveUser (" dene @ deneme . com ",
 
" 1232424 ",  ""));
$ This - y gt ; assertFalse ( Usuarios :: modelo () - y gt ; saveUser ("",  " 1232424 ",
 
" deneme traceper "));
$ This - y gt ; assertFalse ( Usuarios :: modelo () - y gt ; saveUser (" dene @ deneme . com ",  "",
 
" deneme traceper "));
$ This - y gt ; assertFalse ( Usuarios :: modelo () - y gt ; saveUser ("",  "",  " deneme traceper "));
 
}
 
pública  función testWrongFormattedEmail () {
 
// Tratar de registrarse con una dirección de correo electrónico con formato incorrecto
$ This - y gt ; assertFalse ( Usuarios :: modelo () - y gt ; saveUser (" denedeneme . com ",  " 1232424 ",
 
" deneme traceper "));
}
}
?>