<?php
    include "../config/db_connector.php";

    //recuperation de donnes
    $cin = $_POST["cin"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    

    //connexion a la base de donnes
    $base = connect_to_db();

    //preparation de la requette sql
    $requtte = "insert into etudiant values ('$cin','$nom','$prenom',$age,'$email');";


    //execution de la requtte

    $nblingne  = $base->exec($requtte);
    

    //affichage resultat de l'insertion
    if($nblingne == 1){
        echo "student inserted";
    }else{
        echo "error";
    }

?>