<?php 
include_once __DIR__ . '/../model/utilisateur.php';

class DaoUtilisateur{
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
    public function saveUser(Utilisateur $user){
        $stm =$this->dbh->prepare("INSERT INTO utilisateur (email, password, name, birthdate, tel, visibility, website, description, connected) VALUES(?,?,?,?,?,?,?,?,?)");
        $stm->bindValue(1,$user->getEmail());
        $stm->bindValue(2,$user->getPassword());
        $stm->bindValue(3,$user->getName());
        $stm->bindValue(4,$user->getBirthdate());
        $stm->bindValue(5,$user->getTel());
        $stm->bindValue(6,$user->getVisibility());
        $stm->bindValue(7,$user->getWebsite());
        $stm->bindValue(8,$user->getDescription());
        $stm->bindValue(9,$user->isConnected()); // Assurez-vous que cette valeur est un booléen ou un entier, en fonction du type de la colonne "connected"
        $stm->execute();
    }
    
    public function findUser($login , $psw){
        $stm=$this->dbh->prepare("SELECT * FROM utilisateur where email = ? AND password= ?");
        $stm->bindParam(1,$login);
        $stm->bindParam(2,$psw);
        $stm->execute();
        $result = $stm->fetch(PDO :: FETCH_ASSOC);
        if(!empty($result)){
            $user = new Utilisateur($result['email'],$result['password'],$result['name'],$result['birthdate'],$result['telephone'],$result['visibility'],$result['website'],$result['description'],$result['connected']);
        }
        return $user;
    }

    public function markUserAsConnected($email){
        // Mettre à jour la colonne connected pour marquer l'utilisateur comme connecté
        $stm = $this->dbh->prepare("UPDATE utilisateur SET connected = 1 WHERE email = ?");
        $stm->bindValue(1, $email);
        $stm->execute();
    }
    public function markUserAsDisconnected($email){
        // Mettre à jour la colonne connected pour marquer l'utilisateur comme déconnecté
        $stm = $this->dbh->prepare("UPDATE utilisateur SET connected = 0 WHERE email = ?");
        $stm->bindValue(1, $email);
        $stm->execute();
    }
    
}
?>
