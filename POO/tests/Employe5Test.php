<?php
spl_autoload_register(function($class) 
{
    include "classes/".$class.".class.php";
});

use PHPUnit\Framework\TestCase; // Charge le framework PhpUnit

class Employe5Test extends TestCase
{
    public $proprietePrivee = true;

    public function isPropertyPrivate($instance, $propertyName){
        $reflector = new \ReflectionProperty($instance, $propertyName);
        $reflector_instance = $reflector->isPrivate();
        return $reflector_instance;
    }

    // Teste l'instanciation d'un objet Agence
    public function testPersonnageBase() {
        $agenceATester = new Agence();
        $this->assertNotNull($agenceATester);
    }
    


    // Teste la visibilité du champ nom de la classe Agence
    public function testPersonnageChampNom(){
        $agenceATester = new Agence();
        $private = $this->isPropertyPrivate($agenceATester,'_nom');
        $this->assertEquals($this->proprietePrivee,$private);
    }
    
    // Teste la valeur du champ nom à l'instanciation de la classe Agence
    public function testPersonnageChampNomDefault() {
        $agenceATester = new Agence();
        $this->assertNull($agenceATester->getNom());
    }
    
    // Teste l'assignation du champ nom à l'instanciation de la classe Agence
    public function testPersonnageChampNomAssignation() {
        $agenceATester = new Agence();
        $agenceATester->setNom("Agence");
        $this->assertEquals("Agence",$agenceATester->getNom());
    }
    


    // Teste la visibilité du champ Adresse de la classe Agence
    public function testPersonnageChampAdresse(){
        $agenceATester = new Agence();
        $private = $this->isPropertyPrivate($agenceATester,'_adresse');
        $this->assertEquals($this->proprietePrivee,$private);
    }
    
    // Teste la valeur du champ adresse à l'instanciation de la classe Agence
    public function testPersonnageChampAdresseDefault() {
        $agenceATester = new Agence();
        $this->assertNull($agenceATester->getAdresse());
    }
    
    // Teste l'assignation du champ adresse à l'instanciation de la classe Agence
    public function testPersonnageChampAdresseAssignation() {
        $agenceATester = new Agence();
        $adresse = "3 rue de la paix";
        $agenceATester->setAdresse($adresse);
        $this->assertEquals($adresse,$agenceATester->getAdresse());
    }
    


    // Teste la visibilité du champ codePostal de la classe Agence
    public function testPersonnageChampCodePostal(){
        $agenceATester = new Agence();
        $private = $this->isPropertyPrivate($agenceATester,'_codePostal');
        $this->assertEquals($this->proprietePrivee,$private);
    }
    
    // Teste la valeur du champ codePostal à l'instanciation de la classe Agence
    public function testPersonnageChampCodePostalDefault() {
        $agenceATester = new Agence();
        $this->assertNull($agenceATester->getCodePostal());
    }
    
    // Teste l'assignation du champ codePostal à l'instanciation de la classe Agence
    public function testPersonnageChampCodePostalAssignation() {
        $agenceATester = new Agence();
        $codePostal = "80000";
        $agenceATester->setCodePostal($codePostal);
        $this->assertEquals($codePostal,$agenceATester->getCodePostal());
    }
    


    // Teste la visibilité du champ ville de la classe Agence
    public function testPersonnageChampVille(){
        $agenceATester = new Agence();
        $private = $this->isPropertyPrivate($agenceATester,'_ville');
        $this->assertEquals($this->proprietePrivee,$private);
    }
    
    // Teste la valeur du champ ville à l'instanciation de la classe Agence
    public function testPersonnageChampVilleDefault() {
        $agenceATester = new Agence();
        $this->assertNull($agenceATester->getVille());
    }
    
    // Teste l'assignation du champ ville à l'instanciation de la classe Agence
    public function testPersonnageChampVilleAssignation() {
        $agenceATester = new Agence();
        $ville = "Amiens";
        $agenceATester->setVille($ville);
        $this->assertEquals($ville,$agenceATester->getVille());
    }
    




    
    // Teste la visibilité du champ agence de la classe Employe
    public function testPersonnageChampAgence(){
        $employeATester = new Employe();
        $private = $this->isPropertyPrivate($employeATester,'_agence');
        $this->assertEquals($this->proprietePrivee,$private);
    }
    
    // Teste la valeur du champ agence à l'instanciation de la classe Agence
    public function testPersonnageChampAgenceDefault() {
        $employeATester = new Employe();
        $this->assertNull($employeATester->getAgence());
    }
    
    // Teste l'assignation du champ agence à l'instanciation de la classe Agence
    public function testPersonnageChampAgenceAssignation() {
        $employeATester = new Employe();
        $agence = new Agence();
        $employeATester->setAgence($agence);
        $this->assertEquals($agence,$employeATester->getAgence());
    }



}
?>