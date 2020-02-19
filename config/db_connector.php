<?php

function connect_to_db(){

    $database  = "testdb";
    $server = "localhost";
    $username = "root";
    $passeword = "";
    $dns = "mysql:host=$server;dbname=$database" ;

    try{
        $connector = new PDO($dns,$username,$passeword);
        return $connector;

    }catch(PDOException $e){
        die('Erreur : '.$e->getMessage());
    }


}


?>