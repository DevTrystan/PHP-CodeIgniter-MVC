<?php
// Indiquez ici le chemin absolu vers votre fichier "Personnage.class.php"
require_once "./classes/PersonnageDefault.class.php";

use PHPUnit\Framework\TestCase; // Charge le framework PhpUnit

class PersonnageDefaultTest extends TestCase
{   
    public function isPropertyPrivate($instance, $propertyName){
        $reflector = new \ReflectionProperty($instance, $propertyName);
        $reflector_instance = $reflector->isPrivate();
        echo $reflector_instance;
        return $reflector_instance;
    }

    // Teste la visibilité du champ nom
    public function testPersonnageChampNom(){
        $personnageLambda = new PersonnageDefault();
        $private = $this->isPropertyPrivate($personnageLambda,'_nom');
        $this->assertEquals(true,$private);
    }
    
    // Teste la valeur par défaut du champ nom à l'instanciation
    public function testPersonnageChampNomDefault() {
        $personnageLambda = new PersonnageDefault();
        $this->assertEquals("Loper", $personnageLambda->getNom());
    }
    
    // Teste l'assignation du champ nom 
    public function testPersonnageValeurNom() {
        $personnageLambda = new PersonnageDefault();
        $personnageLambda->setNom("Loper");
        $this->assertEquals('Loper',$personnageLambda->getNom());
    }

    // Teste la visibilité du champ prenom
    public function testPersonnageChampPrenom(){
        $personnageLambda = new PersonnageDefault();
        $private = $this->isPropertyPrivate($personnageLambda,'_prenom');
        $this->assertEquals(true,$private);
    }
    
    // Teste la valeur par défaut du champ prenom à l'instanciation
    public function testPersonnageChampPrenomDefault() {
        $personnageLambda = new PersonnageDefault();
        $this->assertEquals("Dave", $personnageLambda->getPrenom());
    }
    
    // Teste l'assignation du champ prenom
    public function testPersonnageValeurPrenom() {
        $personnageLambda = new PersonnageDefault();
        $personnageLambda->setPrenom("Dave");
        $this->assertEquals('Dave',$personnageLambda->getPrenom());
    }

    // Teste la visibilité du champ age
    public function testPersonnageChampAge(){
        $personnageLambda = new PersonnageDefault();
        $private = $this->isPropertyPrivate($personnageLambda,'_age');
        $this->assertEquals(true,$private);
    }
    
    // Teste la valeur par défaut du champ age à l'instanciation
    public function testPersonnageChampAgeDefault() {
        $personnageLambda = new PersonnageDefault();
        $this->assertEquals(18, $personnageLambda->getAge());
    }
    
    // Teste l'assignation du champ age
    public function testPersonnageValeurAge() {
        $personnageLambda = new PersonnageDefault();
        $personnageLambda->setAge(18);
        $this->assertEquals(18,$personnageLambda->getAge());
    }

    // Teste la visibilité du champ sexe
    public function testPersonnageChampSexe(){
        $personnageLambda = new PersonnageDefault();
        $private = $this->isPropertyPrivate($personnageLambda,'_sexe');
        $this->assertEquals(true,$private);
    }
    
    // Teste la valeur par défaut du champ sexe à l'instanciation
    public function testPersonnageChampSexeDefault() {
        $personnageLambda = new PersonnageDefault();
        $this->assertEquals("Masculin",$personnageLambda->getSexe());
    }
    
    // Teste l'assignation du champ sexe
    public function testPersonnageValeurSexe() {
        $personnageLambda = new PersonnageDefault();
        $personnageLambda->setSexe("Masculin");
        $this->assertEquals('Masculin',$personnageLambda->getSexe());
    }
}


?>