<?php
// Utilisez le chemin absolu pour inclure le fichier utilisateur.php
include_once $_SERVER['DOCUMENT_ROOT'] . '/Atelier11/model/utilisateur.php';
session_start();

// Vérifiez si la clé 'utilisateur' est définie dans $_SESSION et n'est pas null
if (isset($_SESSION['utilisateur']) && $_SESSION['utilisateur'] !== null) {
    // Incluez le fichier daoUtilisateur.php en utilisant le chemin absolu
    include_once $_SERVER['DOCUMENT_ROOT'] . '/Atelier11/dao/daoUtilisateur.php';
    
    // Obtenez l'e-mail de l'utilisateur à partir de la session
    $email = $_SESSION['utilisateur']->getEmail();

    // Détruisez la session pour déconnecter l'utilisateur
    session_unset();
    session_destroy();

    // Créez une instance de DaoUtilisateur
    $dao = new DaoUtilisateur();

    // Vérifiez si la méthode markUserAsDisconnected() existe dans DaoUtilisateur
    if (method_exists($dao, 'markUserAsDisconnected')) {
        // Appelez la méthode pour marquer l'utilisateur comme déconnecté
        $dao->markUserAsDisconnected($email);
    } else {
        // Gérez le cas où la méthode n'est pas définiehg
        error_log('La méthode markUserAsDisconnected() n\'est pas définie dans la classe DaoUtilisateur.');
    }

    // Redirigez l'utilisateur vers la page de connexion ou une autre page appropriée
    header('Location: /Atelier11/view/login.html');
    exit();
} else {
    // Redirigez l'utilisateur vers la page de connexion si aucune session n'est active
    header('Location: /Atelier11/view/login.html');
    exit();
}
?>
