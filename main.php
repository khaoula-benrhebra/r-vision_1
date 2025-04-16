<?php

interface ReservableInterface  {
  
  public function reserver(Client $client, DateTime $dateDebut, int $nbJours) ;
}

abstract class Vehicule {
  
  protected $id ;
  protected $immatriculation ;
  protected $marque ;
  protected $modele ;
  protected $prixJour ;
  protected $disponible ;
   public function__construct($id , $immatriculation , $marque , $modele , $prixJour , $disponible ){
        return $this-> id =$id ;
        return $this-> immatriculation = $immatriculation;
        return $this-> marque = $marque;
        return $this-> modele = $modele;
        return $this-> prixJour = $prixJour;
        return $this-> disponible = $disponible;
     };
  public function afficherDetails(){
   echo'id : {$this->id}';
   echo'marque : {$this->marque}';
   echo'marque : {$this->modele}';
   echo'marque : {$this->immatriculation}';
   echo'marque : {$this->calculerPrix(int $prix}';
   echo'marque : {$this->estdisponible()}';
    
  };
  public function calculerPrix(int $jours) {
    return $this->prix = $prixJour * $jours ;
  } ;
  public function estDisponible(){
   $this->disponible = $disponible ; 
    
  } ;
  
  public function getType() ;
  
}




class Voiture extends Vehicule implements ReservableInterface {
  private $nbPortes ;
  private $transmission;
  
  public function__construct($id , $immatriculation , $marque , $modele , $prixJour , $disponible ){
    parent::construct($nbPortes , $transmission){
      return $this->nbPortes =$nbPortes ;
      return $this->transmission =$transmission;
      
    }
  }
  public function reserver() {
    
  };
  public function getType() {
    return $this->type ;
  };
  public function afficherDetails(){
    echo'id : {$this->id}';
   echo'marque : {$this->marque}';
   echo'modele : {$this->modele}';
   echo'immatriculation : {$this->immatriculation}';
   echo'prix : {$this->calculerPrix(int $prix}';
   echo'disppnibilité : {$this->estdisponible()}'; 
   echo'nbPortes : {$this->$nbPortes}'; 
   echo'transmission : {$this->$transmission}'; 
  };
  
  
}

class Moto extends Vehicule implements ReservableInterface {
  
  private $cylindree ;
  
  public function__construct($id , $immatriculation , $marque , $modele , $prixJour , $disponible ){
    parent::construct($cylindree){
      return $this->cylindree =$cylindree ;
      
    }
  }
  
  public function reserver();
  public function getType() {
    return $this->type ;
  };
  public function afficherDetails(){
   echo'id : {$this->id}';
   echo'marque : {$this->marque}';
   echo'modele : {$this->modele}';
   echo'immatriculation : {$this->immatriculation}';
   echo'prix : {$this->calculerPrix(int $prix}';
   echo'disppnibilité : {$this->estdisponible()}'; 
   echo'cylindree : {$this->$cylindree}'; 
  };
  
}


class Camion extends Vehicule implements ReservableInterface {
  
 private $capaciteTonnage ;
 
  public function__construct($id , $immatriculation , $marque , $modele , $prixJour , $disponible ){
    parent::construct($cyl$capaciteTonnageindree){
      return $this->capaciteTonnage =$capaciteTonnage ;
      
    }
 
 public function reserver();
  public function getType() {
    return $this->type ;
  };
 public function afficherDetails(){
   echo'id : {$this->id}';
   echo'marque : {$this->marque}';
   echo'modele : {$this->modele}';
   echo'immatriculation : {$this->immatriculation}';
   echo'prix : {$this->calculerPrix(int $prix}';
   echo'disppnibilité : {$this->estdisponible()}'; 
   echo'capaciteTonnage : {$this->capaciteTonnage}'; 
  };
 
}

abstract class Personne {
  protected $nom ; 
  protected $prenom;
  protected $email;
  
  afficherProfil();
  
}

class Client extends Personne {
  
  private $numeroClient ;
  private $reservations = [];
  public function__construct($nom , $prenom, $email){
     parent::construct($numeroClient , $reservations ){
       return $this->numeroClient =$numeroClient ;
       return $this->reservations  =$reservations  ;
     }
   }
   
  
  ajouterReservation(Reservation $r){
    
  }
  afficherProfil();
  getHistorique()
}


?>);
