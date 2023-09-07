<!DOCTYPE html>
<html lang="en">
<head>
    <!------------$_COOKIE
    lien github:https://github.com/NCB-DEV/letecode_tp4.git
    ------------------>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
    <link rel="stylesheet" href="">
    <style>
        .form{
            width:21%;
            display: flex;
            flex-direction: column;
            margin: 15% auto;
            text-align:center;
        }
        #button{
            background-color: blue;
            height: 30px;
            width:102%;
            color:white;
        }
        input{
            width:100%;
            margin:10px;
            height: 25px;
            border-radius:5px;
            background:gray;
        }
    </style>
</head>
<body>
    <div class="form">
      <form action="?action=connexion" method="post">
        <h3>connexion</h3>
        <input type="text" name="nom" id="nom" placeholder="   Username">
        <input type="password" name="mdp" id="mdp" placeholder="   Password">
        <input id="button" type="submit" value="Se connecter" name="connexion">
      </form>
      <p>Pas encore membre ? <a href="?action=enregistrement">créer un compte !</a></p>
      <?php
        if(isset($message)){
            echo "<h5 style='color:red'>".$message."</h5>";
        }
       ?>
    </div>
    
</body>
</html>