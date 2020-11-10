<?php

namespace models;

require_once("Conexion.php");

class UsuarioModel
{

    public function insertarUsuario($data)
    {
        //[email=>valor, nombre=>valor, clave=>value]
        $stm = Conexion::conector()->prepare("INSERT INTO usuario VALUES(:A,:B,:C)");
        $stm->bindParam(":A", $data['email']);
        $stm->bindParam(":B", $data['nombre']);
        $stm->bindParam(":C", md5($data['clave'])); //123=> md5(123)=>wertyui56789234ds
        return $stm->execute();
    }


    public function buscarUsuarioLogin($email, $clave)
    {
        $stm = Conexion::conector()->prepare("SELECT * FROM usuario WHERE email=:A AND clave=:B");
        $stm->bindParam(":A", $email);
        $stm->bindParam(":B", md5($clave));
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }
}
