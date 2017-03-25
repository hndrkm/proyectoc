<?php

class Persona{
    
    private $nickname;
    private $nombre;
    private $apellido;
    private $fechanac;
    private $sexo;    
    private $correo;  
    private $password;
    private $idUbicacion ;


    public function __construct($nickname,$nombre,$apellido,$fechanac,$sexo,$correo,$password,$idUbicacion) {
        $this -> nickname = $nickname;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> fechanac = $fechanac;
        $this -> sexo = $sexo;
        $this -> correo = $correo;
        $this -> password = $password;
        $this -> idUbicacion = $idUbicacion;
    }

    public function obtener_nickname() {
        return $this -> nickname;
    }
    

    public function obtener_nombre() {
        return $this -> nombre;
    }

    public function obtener_apellido() {
        return $this -> apellido;
    }

    public function obtener_fechanac() {
        return $this -> fechanac;
    }

    public function obtener_sexo() {
        return $this -> sexo;
    }

    public function obtener_correo() {
        return $this -> correo;
    }

    public function obtener_password() {
        return $this -> password;
    }

    public function obtener_idUbicacion() {
        return $this -> idUbicacion;
    }

    public function cambiar_nickname($nickname) {
        $this -> nickname = $nickname;
    }
    
    
    
}