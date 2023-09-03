<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <style>
        div{
            width:30%;
            margin:8% auto;
            text-align:center;
        }
        img{
            border-radius: 50px;
            width:130px;
            height: 130px;
            margin:5px;
        }
        p{
            font-weight: bold;
        }
        .button{
            background-color: red;
            color:white;
            height: 30px;
            width:50%;
            border-radius:10px;
        }
        a{
            color:white;
            text-decoration:none;
            position:relative;
            top:5px;
        }
    </style>
</head>
<body>
    <div>
        <img src="../ressources/images/html.png" alt=""><br>
       <p>bienvenu dans votre compte,<?php echo $_SESSION["nom"];?></p> 
        <?php echo "@".$_SESSION["user"];?><br>
        <?php echo $_SESSION["email"];?><br>
        <div class="button"><a href="/connexion/?action=déconnexion">Déconnexion</a></div>
    </div>
</body>
</html>