<?php

class Conectar {

    private static $dsn = "mysql:host = localhost;dbname = contas;charset=utf8";
    private static $user = "contasUser";
    private static $pass = "123";


    #Fução que conecta no banco.
    public function connection(){
        try {
            $con = new PDO(self::$dsn,self::$user,self::$pass);
            
        } catch(PDOException $exception){
                echo $exception->getMessage();
        }
        return $con;
    }

    #Função que fecha a conexão
    public function disconect(){
        $con = null;
    }
}
