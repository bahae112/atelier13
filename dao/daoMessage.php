<?php
include "../model/message.php";
class DaoMessage{
    private $dbh;
    public function __construct(){
        try{
            $this->dbh = new PDO("mysql:host=localhost;dbname=test_dbaa","root","");
        }
        catch(PDOException $e){
            print('Erreur:' .$e->getMessage().'<br/>');
            die();
        }
    }
    public function saveMessage(Message $msg){
        $query = $this->dbh->prepare("INSERT INTO message (message,emetteur,date) VALUES (:message,:emetteur,:date)");
        $query->execute(array(
            'message'=>$msg->getMessage(),
            'emetteur'=>$msg->getEmetteur(),
            'date'=>$msg->getDate()
        ));

        
        }

    public function allMsgs(){
        $stm = $this->dbh->prepare("SELECT * FROM message order by date");
        $stm->execute();

        $result = $stm->fetchAll();
        return $result;
    }
}    
?>