<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';

include_once 'app/Persona.inc.php';

include_once 'app/RepositorioPersona.inc.php';


Conexion::abrir_conexion();

for ($personas = 0; $personas < 100; $personas++) {
    $nickname = sa(3);
    $nombre= sa(5);
    $apellido= sa(5);
    /*$fechanac;*/
    $sexo= sea();    
    $correo= sa(3);  
    $password= sa(3);
    $idUbicacion = rand(0,100);

    $persona = new Persona($nickname, $nombre, $apellido, '',$sexo,$correo,$password,$idUbicacion);
    RepositorioPersona::insertar_persona(Conexion::obtener_conexion(), $persona);
}
function sea(){
    $sh = array("hombre","mujer");
    return $sh[rand(0,1)];

}
function sa($longitud) {   
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numero_caracteres = strlen($caracteres);
    $string_aleatorio = '';
    
    for ($i = 0; $i < $longitud; $i++) {
        $string_aleatorio .= $caracteres[rand(0, $numero_caracteres - 1)];
    }
    
    return $string_aleatorio;
}