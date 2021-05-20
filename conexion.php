<?php

class conexion{
   
    const user='sql3412912';
    const pass='bSUBSHU1PN';
    const db='sql3412912';
    const servidor='sql3.freemysqlhosting.net';

    public function conectardb(){
        $conectar = new mysqli(self::servidor, self::user,self::pass,self::db);
        if($conectar->connect_errno){
            die("Error en la coneccion".$conectar->connect_error);
        }
        return $conectar;
    }   
}

?>