<?php 
include '../dao/daoUtilisateur.php';
$action = $_GET['action'];
$dao = new DaoUtilisateur();

switch($action){
    case 'insert':
        $visible=$_POST['etat'];
        $pseudo =$_POST['nom'];
        $site =$_POST['site'];
        $telephone=$_POST['tele'];
        $email=$_POST['ail'];
        $password=$_POST['pass'];
        $birth=$_POST['jour'];
        $desc=$_POST['text'];
        if (isset($visible,$pseudo,$site,$telephone,$email,$password,$birth,$desc,$connected)){
            $user = new Utilisateur($email,$password,$pseudo,$birth,$telephone,$visible,$site,$desc,$connected);  
            $dao->saveUser($user);
            echo 'élément ajouté';
        }
        break;
    case 'select' :
        $login = $_POST['utilisateur'];
        $psw = $_POST['motdepasse'];
        $user = $dao->findUser($login, $psw);
        
        if($user != null){
            // Mets à jour la colonne connected dans la base de données
            $dao->markUserAsConnected($user->getEmail());
            
            // Démarre la session et stocke l'utilisateur connecté
            session_start();
            $_SESSION['utilisateur'] = $user;
            header('location:../view/chat.php');
        } else {
            header('location: ../view/login.html');
        }
        break;   
    default:
        // Redirige vers une page par défaut si l'action n'est pas reconnue
        header('location: ../view/login.html');
        break;
}
?>
