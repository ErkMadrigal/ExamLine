<?php
    class inserciones{
        
        public function registrarUsuario($nombre, $apellido, $cargo, $correo, 
                                                $telefono, $contrasenia, $avatar, $grupo ){
            $respuesta = null;
            $sql = "INSERT INTO usuarios (NombreUsr, ApellidoUsr, CargoUsr, telefono, correo, contrasenia, avatar, idGrupo)
             VALUES (:NombreUsr, :ApellidoUsr, :CargoUsr, :telefono, :correo, :contrasenia, :avatar, :idGrupo)";
            try {
                $claseConexion = new database();
                $db = $claseConexion->obtenerConexion();
                $stmt = $db->prepare($sql);
                $stmt->bindParam(":NombreUsr", $nombre);
                $stmt->bindParam(":ApellidoUsr", $apellido);
                $stmt->bindParam(":CargoUsr", $cargo);
                $stmt->bindParam(":telefono", $telefono);
                $stmt->bindParam(":correo", $correo);
                $stmt->bindParam(":contrasenia", $contrasenia);
                $stmt->bindParam(":avatar", $avatar);
                $stmt->bindParam(":idGrupo", $grupo);
                $stmt->execute();
                $respuesta['estado'] = "ok";
                $respuesta['mensaje'] = "Se creo correctamente el usuario";
            } 
            catch (PDOEXCEPTION $e) {
                $respuesta['estado'] = "error";
                $respuesta['mensaje']  = $e->getMessage();
            }
            return $respuesta;
        }
        public function registrarIntegrante($nombre, $apellido, $telefono, $activo, $TelefonoEmergencia, $grupo ){
            
            $respuesta = null;
            $sql = "INSERT INTO integrantes (NombreInt, ApellidoInt, TelefonoInt, activo, TelefonoEmergencia, idGrupo) 
                            VALUES (:NombreInt, :ApellidoInt, :TelefonoInt, :activo, :TelefonoEmergencia, :idGrupo)";
            try {
                $claseConexion = new database();
                $db = $claseConexion->obtenerConexion();
                $stmt = $db->prepare($sql);
                $stmt->bindParam(":NombreInt", $nombre);
                $stmt->bindParam(":ApellidoInt", $apellido);
                $stmt->bindParam(":TelefonoInt", $telefono);
                $stmt->bindParam(":activo", $activo);
                $stmt->bindParam(":TelefonoEmergencia", $TelefonoEmergencia);
                $stmt->bindParam(":idGrupo", $grupo);
                $stmt->execute();
                $respuesta['estado'] = "ok";
                $respuesta['mensaje'] = "Se creo correctamente el usuario";
            } 
            catch (PDOEXCEPTION $e) {
                $respuesta['estado'] = "error";
                $respuesta['mensaje']  = $e->getMessage();
            }
            return $respuesta;
        }
    }