<?php
spl_autoload_register(function($class) 
{
    include "classes/".$class.".class.php";
});

use PHPUnit\Framework\TestCase; // Charge le framework PhpUnit

class Employe3Test extends TestCase
{
    public $salaireTemoin = 30000;
    public $dateTemoin = "12/09/2015";
    
    
    // Teste l'assignation du champ date d'embauche 
    public function testEmployeValeurDateEmbauche() {
        $employeATester = new Employe();
        $dateTemoin = DateTime::createFromFormat("d/m/Y",$this->dateTemoin);
        $employeATester->setDateEmbauche($this->dateTemoin);
        $this->assertEquals($dateTemoin,$employeATester->getDateEmbauche());
    }

    // Teste l'assignation du champ salaire 
    public function testEmployeValeurSalaire() {
        $employeATester = new Employe();
        $employeATester->setSalaire($this->salaireTemoin);
        $this->assertEquals($this->salaireTemoin,$employeATester->getSalaire());
    }
    
    // Teste la fonction calculerPrime() de la classe Employe
    public function testPrimeEmploye1(){
        $employeATester = new Employe();
        $dateTemoin = "12/09/2015";
        $montantPrime = 4500;

        $employeATester->setSalaire($this->salaireTemoin);
        $employeATester->setDateEmbauche($dateTemoin);
        $this->assertEquals($montantPrime,$employeATester->calculerPrime());
    }
    
    // Teste la fonction calculerPrime() de la classe Employe
    public function testPrimeEmploye2(){
        $employeATester = new Employe();
        $dateTemoin = "12/09/2010";
        $montantPrime = 7500;

        $employeATester->setSalaire($this->salaireTemoin);
        $employeATester->setDateEmbauche($dateTemoin);
        $this->assertEquals($montantPrime,$employeATester->calculerPrime());
    }
    
    // Teste la fonction calculerPrime() de la classe Employe
    public function testPrimeEmploye3(){
        $employeATester = new Employe();
        $dateTemoin = "12/09/2010";
        $montantPrime = 6000;
        $salaireTemoin = 24000;

        $employeATester->setSalaire($salaireTemoin);
        $employeATester->setDateEmbauche($dateTemoin);
        $this->assertEquals($montantPrime,$employeATester->calculerPrime());
    }
    
    // Teste la fonction calculerPrime() de la classe Employe
    public function testPrimeEmploye4(){
        $employeATester = new Employe();
        $dateTemoin = "12/09/2018";
        $montantPrime = 4050;
        $salaireTemoin = 45000;

        $employeATester->setSalaire($salaireTemoin);
        $employeATester->setDateEmbauche($dateTemoin);
        $this->assertEquals($montantPrime,$employeATester->calculerPrime());
    }
}
?>