<?php

setlocale(LC_TIME, "fr_FR");
spl_autoload_register(function($class) 
{
    include "classes/".$class.".class.php";
});

use PHPUnit\Framework\TestCase; // Charge le framework PhpUnit

class Employe7Test extends TestCase
{
    public function testIsChequeVacance(){
        $employeATester = new Employe();
        $dateTemoin = "12/11/2019";
        $employeATester->setDateEmbauche($dateTemoin);
        
        $this->assertFalse($employeATester->isChequeVacance());
    }
    
    public function testIsChequeVacance2(){
        $employeATester = new Employe();
        $dateTemoin = "01/04/2020";
        $employeATester->setDateEmbauche($dateTemoin);
        
        $this->assertFalse($employeATester->isChequeVacance());
    }
    
    public function testIsChequeVacance3(){
        $employeATester = new Employe();
        $dateTemoin = "01/04/2018";
        $employeATester->setDateEmbauche($dateTemoin);
        
        $this->assertTrue($employeATester->isChequeVacance());
    }
    
    public function testIsChequeVacance4(){
        $employeATester = new Employe();
        $dateTemoin = date("d/m/Y", strtotime("-1 year"));
        $employeATester->setDateEmbauche($dateTemoin);
        
        $this->assertTrue($employeATester->isChequeVacance());
    }
}

?>