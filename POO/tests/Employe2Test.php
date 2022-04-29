<?php
spl_autoload_register(function($class) 
{
    include "classes/".$class.".class.php";
});

use PHPUnit\Framework\TestCase; // Charge le framework PhpUnit

class Employe2Test extends TestCase
{
    public $dateTemoin = "12/09/2000";
    // Teste l'assignation du champ date d'embauche 
    public function testEmployeValeurDateEmbauche() {
        $employeATester = new Employe();    
        $dateTemoin = DateTime::createFromFormat("d/m/Y",$this->dateTemoin);
        $employeATester->setDateEmbauche($this->dateTemoin);
        $this->assertEquals($dateTemoin,$employeATester->getDateEmbauche());
    }
    
    // Teste la fonction getAnciennete de la classe Employe
    public function testAncienneteEmploye(){
        $employeATester = new Employe();
        $anciennete = 20;
        // $dateTemoin = DateTime::createFromFormat("d/m/Y",$this->dateTemoin);
        $employeATester->setDateEmbauche($this->dateTemoin);
        $this->assertEquals($anciennete,$employeATester->getAnciennete());
    }
    
    // Teste la fonction getAnciennete de la classe Employe
    public function testAncienneteEmploye2(){
        $anciennete = 19;
        $dateTemoin = "12/11/2000";
        $employeATester = new Employe();
        $employeATester->setDateEmbauche("12/11/2000");
        $this->assertEquals($anciennete,$employeATester->getAnciennete());
    }
    
    // Teste la fonction getAnciennete de la classe Employe
    public function testAncienneteEmploye3(){
        $employeATester = new Employe();
        $anciennete = 1;
        // $dateTemoin = DateTime::createFromFormat("d/m/Y",$this->dateTemoin);
        $employeATester->setDateEmbauche("29/10/2018");
        $this->assertEquals($anciennete,$employeATester->getAnciennete());
    }
}
?>