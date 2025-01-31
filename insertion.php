<?php
$visible=$_POST['etat'];
$pseudo =$_POST['nom'];
$site =$_POST['site'];
$telephone=$_POST['tele'];
$email=$_POST['ail'];
$password=$_POST['pass'];
$birth=$_POST['jour'];
$desc=$_POST['text'];
if (!isset($visible,$pseudo,$site,$tel,$email,$psw,$birth,$desc)){
    try{
        $pdo=new PDO("mysql:host=localhost;dbname=test_dbaa","root","");
        $stm =$pdo->prepare("INSERT INTO utilisateur VALUES('$email','$password','$pseudo','$birth','$telephone','$visible','$site ','$desc')");
        $stm->bindParam(1,$email);
        $stm->bindParam(2,$password);
        $stm->bindParam(3,$pseudo);
        $stm->bindParam(4,$birth);
        $stm->bindParam(5,$telephone);
        $stm->bindParam(6,$visible);
        $stm->bindParam(7,$site);
        $stm->bindParam(8,$desc);
        $stm->execute();
        echo 'element ajoute';
    }
    catch(PDOExcepton $e){
        print('Erreur:' .$e->getMessage().'<br/>');
    }
}
?>