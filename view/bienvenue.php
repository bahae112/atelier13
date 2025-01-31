<?php 
include '../model/utilisateur.php';
include_once __DIR__ . '/../model/utilisateur.php';
session_start();
if(isset($_SESSION['utilisateur'])){
    echo "Bienvenue " .$_SESSION['utilisateur']->getName()."<br>";

    // Affiche si l'utilisateur est connecté ou non
    if ($_SESSION['utilisateur']->isConnected()) {
        echo "Vous êtes connecté.";
    } else {
        echo "Vous n'êtes pas connecté.";
    }

    echo "<br><a href='../controller/logout.php'>Déconnexion</a>"; // Lien de déconnexion mis à jour

} else {
    header('location:login.html');
}
?>
