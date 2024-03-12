<?php
session_start(); // Démarrage de la session PHP

// Vérification si l'utilisateur est connecté (une session est active)
if (!isset($_SESSION["user_id"])) {
    // Redirection vers la page de connexion si l'utilisateur n'est pas connecté
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="sucess">
     <h1>Bienvenue, <?php echo $user['nom']; ?>!</h1>
    <p>Vous êtes connecté en tant qu'utilisateur avec l'adresse email <?php echo $user['email']; ?>.</p>
    <p><a href="logout.php">Déconnexion</a></p>
  </div>
</body>

</html>