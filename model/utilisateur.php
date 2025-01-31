<?php
class Utilisateur{
    private $email;
    private $password;
    private $name;
    private $birthdate;
    private $tel;
    private $visibility;
    private $website;
    private $description;
    private $connected;
    
    public function __construct($email, $password, $name, $birthdate, $tel, $visibility, $website, $description, $connected){
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
        $this->birthdate = $birthdate;
        $this->tel = $tel;
        $this->visibility = $visibility;
        $this->website = $website;
        $this->description = $description;
        $this->connected = $connected;
    }
    public function isConnected() {
        return $this->connected;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getName(){
        return $this->name;
    }

    public function getBirthdate(){
        return $this->birthdate;
    }

    public function getTel(){
        return $this->tel;
    }

    public function getVisibility(){
        return $this->visibility;
    }

    public function getWebsite(){
        return $this->website;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setEmail($email) :self
    {
        $this->email = $email;
        return $this;
    }

    public function setPassword($password) :self
    {
        $this->password = $password;
        return $this;
    
    }

    public function setName($name) :self
    {
        $this->name = $name;
        return $this;
    }

    public function setBirthdate($birthdate) :self
    {
        $this->birthdate = $birthdate;
        return $this;
    }

    public function setTel($tel) :self
    {
        $this->tel = $tel;
        return $this;
    }

    public function setVisibility($visibility):self
    {
        $this->visibility = $visibility;
        return $this;
    }

    public function setWebsite($website) :self
    {
        $this->website = $website;
        return $this;
    }

    public function setDescription($description) :self
    {
        $this->description = $description;
        return $this;
    }
} 

?>