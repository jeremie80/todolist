<?php
include_once("connectdb.php"); //connexion base de données 

    try
    {
        $req=$bdd->prepare('SELECT * FROM tache');

        $req->execute();
        require('index.php?page=main');

    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    
?>