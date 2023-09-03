<?php
session_start();
function ajouters($nom,$email,$user,$mdp){
    $_SESSION["nom"]=$nom;
    $_SESSION["email"]=$email;
    $_SESSION["user"]=$user;
    $_SESSION["mdp"]=$mdp;
    $_SESSION['message']="connecté";
}
