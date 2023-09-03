<?php
require("modeles/modele.php");
function accueil(){
    require('views/authentification.php');
}
function authentification(){
    if(isset($_POST['connexion'])){
        if(empty($_POST["nom"])){
            $message="Veillez indiquer votre nom";
            require('views/authentification.php');
        }
        else{
            if(empty($_POST["mdp"])){
                $message="Veillez indiquer votre mot de passe";
                require('views/authentification.php'); 
            }
            else{
                $nom=$_POST['nom'];
                $mdp=sha1($_POST['mdp']);
                if(($nom==$_SESSION['user']) && ($mdp==$_SESSION["mdp"])){
                    verification();
                }
                else{
                    $message="Utilisateur non réconnu";
                    require("views/authentification.php");
                }
            }
        }
    }
}
function enregistrement(){
    require('views/enregistrement.php');
}
function connexions(){
    accueil();
}
function ajouter(){
    if(isset($_POST['ajouter'])){
        if(empty($_POST['nom_complet']))
        {
            $message="Veillez indiquer votre nom";
            require('views/enregistrement.php');
        }
        else{
            if(empty($_POST['email'])){
                $message="Veillez indiquer votre email";
                require('views/enregistrement.php');
            }
            else{
                if(empty($_POST['username'])){
                    $message="Veillez indiquer votre nom d'utilisateur";
                    require('views/enregistrement.php');
                }
                else{
                    if(empty($_POST["mdp"])){
                        $message="Veillez indiquer votre mot de passe";
                        require('views/enregistrement.php'); 
                    }
                    else{
                        if(empty($_POST["mdp_conf"])){
                            $message="Veillez confirmer votre mot de passe";
                            require('views/enregistrement.php'); 
                        }
                        else{
                            if($_POST['mdp']!=$_POST['mdp_conf']){
                                $message="Les mots de passe ne correspondent !";
                                require('views/enregistrement.php');
                            }
                            else{
                                $nom=$_POST['nom_complet'];
                                $email=$_POST['email'];
                                $username=$_POST['username'];
                                $mdp=sha1($_POST['mdp']);
                                ajouters($nom,$email,$username,$mdp);
                                verification();
                            }
                        }
                    }
                }
            }
        }
    }
}
function verification(){
    if(isset($_SESSION['message'])){
        if($_SESSION['message']=="connecté"){
            header("location:views/profil.php");
        }
        else{
            enregistrement();           
        }
    }
}
