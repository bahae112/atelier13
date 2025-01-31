<?php 
$login = $_POST['utilisateur'];
$psw = $_POST['motdepasse'];
try{
    $pdo=new PDO("mysql:host=localhost;dbname=test_dbaa","root","");
    $stm =$pdo->prepare("SELECT * FROM  utilisateur where utilisateur=? and motdepasse=?");
    $stm->bindParam(1,$login);
    $stm->bindParam(2,$psw);
    $stm->execute();
    $result = $stm->fetch(PDO :: FETCH_ASSOC);
    if(!empty($result)){
        session_start();
        $_SESSION['utilisateur']=$result['name'];
        header('location:bienvenue.php');

     }

}
catch(PDOExcepton $e){
    print('Erreur:' .$e->getMessage().'<br/>');
}     
?>
