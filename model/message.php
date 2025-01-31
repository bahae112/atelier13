<?php
class Message{
    private $id;
    private $message;
    private $emetteur;
    private $date;

    public function __construct($id, $message, $emetteur, $date){
        $this->id = $id;
        $this->message = $message;
        $this->emetteur = $emetteur;
        $this->date = $date;
    }
    
    public function getId(){
        return $this->id;
    }
     
    public function getMessage(){
        return $this->message;
    }
    
    public function getEmetteur(){
        return $this->emetteur;
    }
    
    public function getDate(){
        return $this->date;
    }
    
}