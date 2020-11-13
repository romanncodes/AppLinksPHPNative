<?php

namespace models;


class Conexion
{
    public static $user = "u2vwzktfju8tdkcj";
    public static $pass = "GGo664jAffJyzbmp94rI";
    public static $URL = "mysql:host=bk5r5fgocrjtpveffovn-mysql.services.clever-cloud.com;dbname=bk5r5fgocrjtpveffovn";

    public static function conector()
    {
        try {
            return new \PDO(Conexion::$URL, Conexion::$user, Conexion::$pass);
        } catch (\PDOException $e) {
            return null;
        }
    }
}
