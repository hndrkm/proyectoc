<?php

class InterfazPersona {
 
    public static function obtener_todos($conexion) {
        
        $personas = array();
        
        if (isset($conexion)) {
            
            try {
                
                include_once 'Persona.inc.php';
                
                $sql = "SELECT * FROM persona";
                
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> execute();
                
                $resultado = $sentencia -> fetchAll();
                
                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $personas[] = new Persona(
                                $fila['nickname'], $fila['nombre'], $fila['apellido'], $fila['fechanac'], $fila['sexo'], $fila['correo'],$fila['password'],$fila['idUbicacion']
                        );
                    }
                } else {
                    print 'No hay usuarios';
                }
                
            } catch (PDOException $ex) {
                print "ERROR" . $ex -> getMessage();
            } 
        }
        
        return $personas;      
    }
    
    
    
    public static function insertar_persona($conexion, $persona) {
        $persona_insertado = false;
        
        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO persona(nickname,nombre,apellido,fechanac,sexo,correo ,password,idUbicacion ) VALUES(:nickname,:nombre,:apellido,Now(),:sexo,:correo,:password,:idUbicacion)";
                
                $sentencia = $conexion -> prepare($sql);
                
                $sentencia -> bindParam(':nickname', $persona -> obtener_nickname(), PDO::PARAM_STR);
                $sentencia -> bindParam(':nombre', $persona -> obtener_nombre(), PDO::PARAM_STR);
                $sentencia -> bindParam(':apellido', $persona -> obtener_apellido(), PDO::PARAM_STR);
                
                $sentencia -> bindParam(':sexo', $persona -> obtener_sexo(), PDO::PARAM_STR);
                $sentencia -> bindParam(':correo', $persona -> obtener_correo(), PDO::PARAM_STR);
                $sentencia -> bindParam(':password', $persona -> obtener_pasword(), PDO::PARAM_STR);
                $sentencia -> bindParam(':idUbicacion', $persona -> obtener_idUbicacion(), PDO::PARAM_STR);
                
                $usuario_insertado = $sentencia -> execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        
        return $persona_insertado;
    }
    
   
}
