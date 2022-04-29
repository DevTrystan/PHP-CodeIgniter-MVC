<?php
spl_autoload_register(function($class) 
{
    include "classes/".$class.".class.php";
});

use PHPUnit\Framework\TestCase; // Charge le framework PhpUnit

class Employe6Test extends TestCase
{
    public function getListEmploye(){
        $employes = [];
        for ($i=0; $i < 12; $i++) { 
            $emp = new Employe();
            $emp->setNom("Nom ".$i);
            $emp->setPrenom("Prenom ".$i);
            $emp->setDateEmbauche("12/10/2018");
            $emp->setFonction("Fonction ".$i);
            $emp->setSalaire("Salaire ".$i);
            $emp->setService("Service ".$i);
            
            array_push($employes,$emp);
        }
        return $employes;
    }
    
    public function getListAgence(){
        $agences = [];
        $agences[0] = new Agence();
        $agences[0]->setNom("Agence Resto");
        $agences[0]->setAdresse("adresse 1");
        $agences[0]->setCodePostal("80000");
        $agences[0]->setVille("Ville 1");
        $agences[0]->setModeRestauration(true);
        $agences[1] = new Agence();
        $agences[1]->setNom("Agence Ticket Resto");
        $agences[1]->setAdresse("adresse 2");
        $agences[1]->setCodePostal("80000");
        $agences[1]->setVille("Ville 2");
        $agences[1]->setModeRestauration(false);
        return $agences;
    }
    
    function attribueAgence($employes,$agences){
        for ($i=0; $i < count($employes); $i++) {
            if($i%2==0) {
                $j =0;
            }
            else{
                $j =1;
            }
            $employes[$i]->setAgence($agences[$j]);
        }
    }
    
    public function testAgenceRestauration(){
        $agences = $this->getListAgence();
        
        $employes = $this->getListEmploye();
        
        $this->attribueAgence($employes,$agences);
        for ($i=0; $i < count($employes); $i++) { 
            if($i%2==0){
                $this->assertTrue($employes[$i]->getAgence()->getModeRestauration());
            }
            else{
                $this->assertFalse($employes[$i]->getAgence()->getModeRestauration());
            }
        }
        
        
    }
}



?>