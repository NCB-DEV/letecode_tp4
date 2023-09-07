<?php

function addUsers($nom,$username,$mdp,$mail){
    $con=new PDO("mysql:host=localhost;dbname=tp_8","root","");
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="INSERT INTO users (nom,username,mdp,mail) values(?,?,?,?)";
    $ajout=$con->prepare($sql);
    $ajout->execute(array($nom,$username,$mdp,$mail));
}

function Selects($username,$mdp){
    $con=new PDO("mysql:host=localhost;dbname=tp_8","root","");
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $req="SELECT * FROM users WHERE username=? AND mdp=? ";
    $sel=$con->prepare($req);
    return $sel->execute(array($username,$mdp));
}
