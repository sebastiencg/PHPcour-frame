<?php

abstract class individue{

    protected string $nom;
    protected string $prenom;
    protected int $matricule;

    public function getNom(){
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom=$nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function setPrenom($prenom){
        $this->prenom=$prenom;
    }
    public function getMatricule(){
        return $this->matricule;
    }
    public function setMatricule($matricule){
        $this->matricule=$matricule;
    }
}
class soldat extends individue{
    public function presentationSoldat(){
        echo "je suis $this->prenom je suis le matricule $this->matricule ";
    }

    public function marcher(){
        echo "je sais marcher  <br>";
    }
}

$guy= new soldat();
$guy->setPrenom('guy');
$guy->setMatricule(007);
$guy->presentationSoldat();
$guy->marcher();
//_________________________________soldat
class lieutenants extends soldat{
    public function crier (){
        echo " je sais crier AHHHHHH ";
    }
    public function conduire(){
        echo " je sais conduire  <br>";
    }
}
$sebastien=new lieutenants();
$sebastien->setPrenom('sebastien');
$sebastien->setMatricule('20');
$sebastien->presentationSoldat();
$sebastien->crier();
$sebastien->conduire();
//__________________________________
class colonel extends lieutenants{
    public  function crierFort(){
        echo " plus fort ";
    }
    public function voiture(){
        echo "j ai une voiture <br>";
    }
}
$evan=new colonel();
$evan->setPrenom('evan');
$evan->setMatricule(34567);
$evan->presentationSoldat();
$evan->crier();
$evan->crierFort();
$evan->voiture();
//_______________________________________
class superColonel extends colonel{
    public function belleVoiture(){
        echo "belle voiture <br>";
    }
}
$luc=new superColonel();
$luc->setPrenom('luc');
$luc->setMatricule(23456789);
$luc->presentationSoldat();
$luc->voiture();
$luc->belleVoiture();
//________________________________________
class sirene{
    public function sirene (){
        echo "je suis la sirene de l'armée";
    }
}


