<?php

class conexion{
   
    //Development
    //const user='root';
    //const pass='';
    //const db='servidoriot';
    //const servidor='localhost';

    //Remote Database
    const user='piYJEwHiNC';
    const pass='q91fFhpaFB';
    const db='piYJEwHiNC';
    const servidor='remotemysql.com';

    public function conectardb(){
        $conectar = new mysqli(self::servidor, self::user,self::pass,self::db);
        if($conectar->connect_errno){
            die("Error en la coneccion".$conectar->connect_error);
        }
        return $conectar;
    }   
}

?>