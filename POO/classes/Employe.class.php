<?php

class Employe
{
    private $_nom ;
    private $_prenom ;
    private $_dateEmbauche;
    private $_fonction ;
    private $_salaire ;
    private $_service ;
    private $_anciennete;
    private $_agence;
    public static $nbrEmploye = 0 ;

    public function __construct()
    {
        self::$nbrEmploye++;
    }
    /*---------------------
        Agence
    ---------------------*/
    public function getAgence()
    {
        return $this->_agence;
    }
    public function setAgence($sagence)  
    {
        return $this->_agence=$sagence;
    }

    /*---------------------
        Nom
    ---------------------*/
    public function getNom() //Get // Mutateur : définit/modifie la valeur passée en argument à l'attribut 
    {
        return $this->_nom;
    }

    public function setNom($snom) //Set Accesseur : renvoie la valeur d'un attribut  
    {
        return $this->_nom=$snom;
    }

    /*---------------------
        Prenom
    ---------------------*/
    public function getPrenom()
    {
    
        return $this->_prenom;
    }
    public function setPrenom($sprenom)
    {
    
        return $this->_prenom=$sprenom;
    }
    

    /*---------------------
        Fonction
    ---------------------*/
    public function getFonction()
    {
        return $this->_fonction;
    }
    public function setFonction($fonction)
    {
        return $this->_fonction=$fonction;
    }
    /*---------------------
        Salaire
    ---------------------*/
    public function getSalaire()
    {
    return $this->_salaire;
    }
    public function setSalaire($modifSalaire)
    {
        $this->_salaire=$modifSalaire;
    }
    /*---------------------
        Service
    ---------------------*/
    public function getService()
    {
        return $this->_service;
    }

    public function setService($service)
    {
        return $this->_service = $service;
    }

    /*---------------------
        Ancienneté
    ---------------------*/
    public function getAnciennete()
    {
        $date2 = $this->_dateEmbauche;
        $date1 = new datetime();
        $interval = $date1->diff($date2);
        $interval->format(' %y ');
        return $interval->y;
        }
    
    /*---------------------
        Date Embauche
    ---------------------*/
    public function getDateEmbauche()
    {
        return $this->_dateEmbauche;
    }
    

    public function setDateEmbauche($sDate)
    {   
        $this->_dateEmbauche=dateTime::createFromFormat('d/m/Y', $sDate);
    }
    /*----------------------
        Calcul de la Prime
    ------------------------*/

    public function calculerPrime()
    {
        $recupAnciennete= $this->getAnciennete();
        $SalaireBrut = $this->_salaire;
        $prime2 = ($SalaireBrut*2)/100*($recupAnciennete);
        $prime5 = ($SalaireBrut*5)/100;
        return $prime =  ($prime2)+($prime5);
    }
    








}

// $dateAffiche = new Employe();

// $dateAffiche->setDateEmbauche("12/09/2015");
// $dateAffiche->setSalaire(30000);
// echo ("Boubacar votre versement est de : ").$dateAffiche->calculerPrime()."<br>";


// $dateAffiche = new Employe();

// $dateAffiche->setDateEmbauche("12/09/2010");
// $dateAffiche->setSalaire(30000);
// echo ("Flavian votre versement est de : ").$dateAffiche->calculerPrime()."<br>";


// $dateAffiche = new Employe();

// $dateAffiche->setDateEmbauche("12/09/2010");
// $dateAffiche->setSalaire(24000);
// echo ("Corentin votre versement est de : ").$dateAffiche->calculerPrime()."<br>";

// $dateAffiche = new Employe();

// $dateAffiche->setDateEmbauche("12/09/2018");
// $dateAffiche->setSalaire(45000);
// echo ("Trystan votre versement est de : ").$dateAffiche->calculerPrime()."<br>";

























?>