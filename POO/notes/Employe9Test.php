<?php
// spl_autoload_register(function($class) 
// {
    //     include $class.".class.php";
    // });
    
    require_once "./classes/Employe.class.php";
    // require_once "./classes/Directeur.class.php";
    require_once "./classes/Agence.class.php";
    
    use PHPUnit\Framework\TestCase; // Charge le framework PhpUnit
    
    class Employe9Test extends TestCase
    {
        public $salaireTemoin = 30000;
        public $dateTemoin = "12/10/2015";
        
        
        // Teste l'assignation du champ date d'embauche 
        public function testDirecteurValeurDateEmbauche() {
            $directeurATester = new Directeur();
            $dateTemoin = DateTime::createFromFormat("d/m/Y",$this->dateTemoin);
            $directeurATester->setDateEmbauche($this->dateTemoin);
            $this->assertEquals($dateTemoin,$directeurATester->getDateEmbauche());
        }
        
        // Teste l'assignation du champ salaire 
        public function testDirecteurValeurSalaire() {
            $directeurATester = new Directeur();

            $directeurATester->setSalaire($this->salaireTemoin);

            $this->assertEquals($this->salaireTemoin,$directeurATester->getSalaire());
        }
        
        // Teste la fonction calculerPrime() de la classe Directeur
        public function testPrimeDirecteur1(){
            $directeurATester = new Directeur();
            
            $directeurATester->setSalaire($this->salaireTemoin);

            $dateTemoin = "12/10/2015";
            $montantPrime = 6600;
            $directeurATester->setDateEmbauche($dateTemoin);
            $this->assertEquals($montantPrime,$directeurATester->calculerPrime());
        }
        
        // Teste la fonction calculerPrime() de la classe Directeur
        public function testPrimeDirecteur2(){
            $directeurATester = new Directeur();
            $dateTemoin = "12/10/2010";
            $montantPrime = 11100;
            
            $directeurATester->setSalaire($this->salaireTemoin);
            $directeurATester->setDateEmbauche($dateTemoin);
            $this->assertEquals($montantPrime,$directeurATester->calculerPrime());
        }
        
        // Teste la fonction calculerPrime() de la classe Directeur
        public function testPrimeDirecteur3(){
            $directeurATester = new Directeur();
            $dateTemoin = "12/10/2010";
            $montantPrime = 8880;
            $salaireTemoin = 24000;
            
            $directeurATester->setSalaire($salaireTemoin);
            $directeurATester->setDateEmbauche($dateTemoin);
            $this->assertEquals($montantPrime,$directeurATester->calculerPrime());
        }
        
        // Teste la fonction calculerPrime() de la classe Directeur
        public function testPrimeDirecteur4(){
            $directeurATester = new Directeur();
            $dateTemoin = "12/10/2018";
            $montantPrime = 5850;
            $salaireTemoin = 45000;
            
            $directeurATester->setSalaire($salaireTemoin);
            $directeurATester->setDateEmbauche($dateTemoin);
            $this->assertEquals($montantPrime,$directeurATester->calculerPrime());
        }
    }
    ?>