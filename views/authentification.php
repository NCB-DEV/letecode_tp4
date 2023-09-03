<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
</head>
<body>
    <form action="?action=connexion" method="post">
        <h3>connexion</h3>
        <input type="text" name="nom" id="nom" placeholder="   Username">
        <input type="password" name="mdp" id="mdp" placeholder="   Password">
        <input type="submit" value="Se connecter" name="connexion">
    </form>
    <p>Pas encore membre ? <a href="?action=enregistrement">créer un compte !</a></p>
    <?php
        if(isset($message)){
            echo "<h5 style='color:red'>".$message."</h5>";
        }
    ?>
</body>
</html>