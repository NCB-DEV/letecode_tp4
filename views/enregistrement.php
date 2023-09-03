<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enregistrement d'un membre</title>
    <style>
        .form{
            width:21%;
            display: flex;
            flex-direction: column;
            margin: 5% auto;
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
      <form action="?action=ajouter" method="post">
        <h3>S'enregistrer</h3>
        <input type="text" name="nom_complet" id="" placeholder="  Nom complet">
        <input type="email" name="email" id="" placeholder="  Adresse email">
        <input type="text" name="username" id="" placeholder="  Username">
        <input type="password" name="mdp" id="" placeholder="  mot de pass">
        <input type="password" name="mdp_conf" id="" placeholder="  confirmer lemot de pass">
        <input id="button" type="submit" name="ajouter" id="" value="Créer un compte">
      </form>
      <p>déjà un membre ? <a href="?action=connexions">connectez-vous</a></p>
      <?php
        if(isset($message)){
            echo "<h5 style='color:red'>".$message."</h5>";
        }
      ?>
    </div>
    
</body>
</html>