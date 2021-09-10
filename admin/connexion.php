<?php
session_start();
    if(isset($_POST['valider'])){
        if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
            $pseudo_par_defaut ="admin";
            $mdp_par_defaut ="admin1234";

            $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
            $mdp_saisi = htmlspecialchars($_POST['mdp']);

            if($pseudo_saisi == $pseudo_par_defaut AND $mdp_saisi == $mdp_par_defaut){
                $_SESSION['mdp'] = $mdp_saisi;
                header('Location: display.php');
            }else{
                echo "Votre mot de passe ou pseudo est incorrect";
            }
        }else{
            echo "Veuillez compléter tous les champs...";
        }
    }        
?>



<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Espace de connexion administrateur</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form method="POST" action="" align="center">
            <input type="text" name="pseudo" autocomplete="off" placeholder="Pseudo">
            <br>
            <input type="password" name="mdp" placeholder="Mot de passe">
            <br><br>
            <input type="submit" name="valider" value="Valider">
        </form>
    </body>
</html>