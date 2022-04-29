<?php
spl_autoload_register(function($class) 
{
    include "classes/".$class.".class.php";
});

use PHPUnit\Framework\TestCase; // Charge le framework PhpUnit

class Employe1Test extends TestCase
{
    public function isPropertyPrivate($instance, $propertyName){
        $reflector = new \ReflectionProperty($instance, $propertyName);
        $reflector_instance = $reflector->isPrivate();
        return $reflector_instance;
    }

    public $proprietePrivee = true;
    
    // Teste l'instanciation d'un objet
    public function testPersonnageBase() {
        $employeATester = new Employe();
        $this->assertNotNull($employeATester);
    }

    // Teste la visibilité du champ nom
    public function testPersonnageChampNom(){
        $employeATester = new Employe();
        $private = $this->isPropertyPrivate($employeATester,'_nom');
        $this->assertEquals($this->proprietePrivee,$private);
    }
    
    // Teste la valeur du champ nom à l'instanciation
    public function testPersonnageChampNomDefault() {
        $employeATester = new Employe();
        $this->assertNull($employeATester->getNom());
    }

    // Teste la visibilité du champ prenom
    public function testPersonnageChampPrenom(){
        $employeATester = new Employe();
        $private = $this->isPropertyPrivate($employeATester,'_prenom');
        $this->assertEquals($this->proprietePrivee,$private);
    }
    
    // Teste la valeur du champ prenom à l'instanciation
    public function testPersonnageChampPrenomDefault() {
        $employeATester = new Employe();
        $this->assertNull($employeATester->getPrenom());
    }

    // Teste la visibilité du champ dateEmbauche
    public function testPersonnageChampDateEmbauche(){
        $employeATester = new Employe();
        $private = $this->isPropertyPrivate($employeATester,'_dateEmbauche');
        $this->assertEquals($this->proprietePrivee,$private);
    }
    
    // Teste la valeur du champ dateEmbauche à l'instanciation
    public function testPersonnageChampDateEmbaucheDefault() {
        $employeATester = new Employe();
        $this->assertNull($employeATester->getDateEmbauche());
    }

    // Teste la visibilité du champ fonction
    public function testPersonnageChampFonction(){
        $employeATester = new Employe();
        $private = $this->isPropertyPrivate($employeATester,'_fonction');
        $this->assertEquals($this->proprietePrivee,$private);
    }
    
    // Teste la valeur du champ fonction à l'instanciation
    public function testPersonnageChampFonctionDefault() {
        $employeATester = new Employe();
        $this->assertNull($employeATester->getFonction());
    }

    // Teste la visibilité du champ salaire
    public function testPersonnageChampSalaire(){
        $employeATester = new Employe();
        $private = $this->isPropertyPrivate($employeATester,'_salaire');
        $this->assertEquals($this->proprietePrivee,$private);
    }
    
    // Teste la valeur du champ salaire à l'instanciation
    public function testPersonnageChampSalaireDefault() {
        $employeATester = new Employe();
        $this->assertNull($employeATester->getSalaire());
    }

    // Teste la visibilité du champ service
    public function testPersonnageChampService(){
        $employeATester = new Employe();
        $private = $this->isPropertyPrivate($employeATester,'_service');
        $this->assertEquals($this->proprietePrivee,$private);
    }
    
    // Teste la valeur du champ service à l'instanciation
    public function testPersonnageChampServiceDefault() {
        $employeATester = new Employe();
        $this->assertNull($employeATester->getService());
    }
    

}
?>