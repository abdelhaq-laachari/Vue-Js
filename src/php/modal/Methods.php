<?php
require_once "../modal/Database.php";
class Methods extends Dbconnect{

    public function getCat()
    {
        $query=$this->connect()->prepare("SELECT * FROM categorie");
         if($query->execute()){
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
        else
        {
            return 0;
        }
    }
    public function SoleCat($id)
    {
        $query=$this->connect()->prepare("SELECT * FROM categorie WHERE idCat = $id ");
         if($query->execute()){
            return $query->fetch(PDO::FETCH_ASSOC);
        }
        else
        {
            return 0;
        }
    }
    public function addCat($name)
    {
       $query=$this->connect()->prepare("INSERT INTO `categorie` (`Nomcat`) VALUES ('$name')");
        if($query->execute()){
            return 'inserted';
            ;
        }else{
            return 'error';
        }
    }
    public function DeleteCat($id)
    {
        $query=$this->connect()->prepare("DELETE * FROM categorie WHERE idCat = $id ");
         if($query->execute()){
            return $query->fetch(PDO::FETCH_ASSOC);
        }
        else
        {
            return 0;
        }
    }


}

