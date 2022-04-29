<?php
spl_autoload_register(function($class) 
{
    include "classes/".$class.".class.php";
});

use PHPUnit\Framework\TestCase; // Charge le framework PhpUnit

class Employe4Test extends TestCase
{
    public $nombreEmployeTest4 = 5;
    public $nombreEmployeTestComplet = 23;
    public  $className = "Employe";
    
    public function getListEmploye(){
        $employes = [];
        for ($i=0; $i < $this->nombreEmployeTest4; $i++) { 
            $emp = new Employe();
            $emp->setNom("Nom ".$i);
            $emp->setPrenom("Prenom ".$i);
            $emp->setDateEmbauche("12/07/2018");
            $emp->setFonction("Fonction ".$i);
            $emp->setSalaire("Salaire ".$i);
            $emp->setService("Service ".$i);
            
            array_push($employes,$emp);
        }
        
        return $employes;
    }
    
    // Commentez ces 2 fonctions si vous executez tous les fichiers de tests à la fois
    
    /*public function testNombreEmploye(){
        $this->assertEquals(0,Employe::$nbrEmploye);
    }
    
    public function testNombreEmploye2(){
        $this->getListEmploye();
        $this->assertEquals($this->nombreEmployeTest4,Employe::$nbrEmploye);
    }*/
    


    // Commentez ces 2 fonctions si vous n'executez que ce fichier de test
    
    public function testNombreEmploye1(){
        $this->assertEquals($this->nombreEmployeTestComplet,Employe::$nbrEmploye);
    }
    
    public function testNombreEmploye2(){
        $employe = new Employe();
        $this->assertEquals($this->nombreEmployeTestComplet + 1,Employe::$nbrEmploye);
    }
}

?>