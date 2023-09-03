<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<body>
    <div>
        <img src="../ressources/images/html.png" alt="">
        <h4>bienvenu dans votre compte,<?php echo $_SESSION["nom"];?></h4>
        <h4><?php echo "@".$_SESSION["user"];?></h4>
        <h4><?php echo $_SESSION["email"];?></h4>
        <a href="?action=déconnexion">déconnexion</a>
    </div>
</body>
</html>