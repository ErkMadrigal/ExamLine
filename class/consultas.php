<?php
    class consultas{

        public function userValidate( $contrasenia, $telefono , $correo ){
            $response  = null;
            $concat1  = ( $telefono == '' ) ? '' : "telefono = '$telefono'";
            $concat2  = ( $correo == '' ) ? '' : "correo ='$correo'";
            
            $sql = "SELECT * FROM usuarios WHERE  ".$concat1." ". $concat2." AND contrasenia='$contrasenia'";
            try{
                $claseConexion = new database();
                $stmt = $claseConexion->obtenerConexion()->query($sql);
                $count = $stmt->rowCount();
                $response  = ( $count > 0  ) ? true : false;
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            return $response;
        }   
        public function userValLog( $contrasenia, $telefono , $correo ){
            $response  = null;

            $sql = "SELECT * FROM usuarios WHERE telefono='$telefono' AND correo='$correo' AND contrasenia='$contrasenia'";
            try{
                $claseConexion = new database();
                $stmt = $claseConexion->obtenerConexion()->query($sql);
                $count = $stmt->rowCount();
                $response  = ( $count > 0  ) ? true : false;
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            return $response;
        }
        public function userIntLog($apellido , $telefono , $telefonoEmergencia){
            $response  = null;

            $sql = "SELECT * FROM integrantes WHERE ApellidoInt='$apellido' AND TelefonoInt='$telefono' AND TelefonoEmergencia='$telefonoEmergencia'";
            try{
                $claseConexion = new database();
                $stmt = $claseConexion->obtenerConexion()->query($sql);
                $count = $stmt->rowCount();
                $response  = ( $count > 0  ) ? true : false;
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            return $response;
        }
        public function userData( $contrasenia, $telefono , $correo ){
            $response  = null;
            $concat1  = ( $telefono == '' ) ? '' : "telefono = '$telefono'";
            $concat2  = ( $correo == '' ) ? '' : "correo='$correo'";

            $sql = "SELECT IdUsr FROM usuarios WHERE  ".$concat1." ". $concat2." AND contrasenia='$contrasenia'";
            try{
                $claseConexion = new database();
                $stmt = $claseConexion->obtenerConexion()->query($sql);
                $response  = $stmt->fetch();
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            return $response;
        }   
        public function getDataUser( $idUser ) {
            $sql = "SELECT * FROM usuarios WHERE IdUsr = '$idUser'";
            $response = null;
            try{
                $claseConexion = new database();
                $stmt = $claseConexion->obtenerConexion()->query($sql);
                $response  = $stmt->fetch();
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            return $response;
        }
    }