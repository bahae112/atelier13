<?php
$login = $_POST['utilisateur'];
$psw = $_POST['motdepasse'];

$con = new mysqli('localhost','root','','test_dbaa');
if($con->connect_error){
    die("erreur".mysqli_error($con));
}

if(isset ($login ,$psw)){
   
    
    $stmt = $con->prepare("SELECT * FROM utilisateur where email=? and  password=? ");
    $stmt->bind_param("ss",$login,$psw);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result === false){
        echo "Erreur dans la requête : " . $con->error;
    }
    else{
        $user = $result->fetch_assoc();
        if(!empty($user)){
            session_start();
            $_SESSION['utilisateur']=$user['name'];
            header('location:bienvenue.php');
        }
        else{
            header('location: login.html');
        }
    }
    $con->close();
     

}
?>
