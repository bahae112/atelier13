<?php
include "../dao/daoMessage.php";
include "../model/utilisateur.php";
session_start();
$action=$_GET['action'];
$dao=new DaoMessage();

switch($action){
    case 'send':
        $msg=new Message(0,$_POST['message'],$_SESSION['utilisateur']->getEmail(),date('Y-m-d H:i:s'));
        $dao->saveMessage($msg);
        break;
    case 'receive':
        $msgs=$dao->allMsgs();
        foreach($msgs as $msg){
            $msg=new Message($msg['id'],$msg['message'],$msg['emetteur'],$msg['date']);
            echo "<p>".$msg->getEmetteur()." : ".$msg->getDate()."<br>" .$msg->getMessage()."</p>";
        }
        break;    
}   
?>             
