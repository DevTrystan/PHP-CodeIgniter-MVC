<?php

class Agence{

    private $_nom;
    private $_adresse;
    private $_codePostal;
    private $_ville;
    private $_agence;
/*---------------------
        Nom
    ---------------------*/
    public function getNom() 
    {
        return $this->_nom;
    }
    public function setNom($snom) 
    {
        return $this->_nom=$snom;
    }
    
    

/*---------------------
        Adresse
    ---------------------*/
    public function getAdresse() //Get // Mutateur : définit/modifie la valeur passée en argument à l'attribut 
    {
        return $this->_adresse;
    }
    public function setAdresse($sadresse) //Set Accesseur : renvoie la valeur d'un attribut  
    {
        return $this->_adresse=$sadresse;
    }

    /*---------------------
        Code Postal
    ---------------------*/
    public function getCodePostal() 
    {
        return $this->_codePostal;
    }
    public function setCodePostal($scp)  
    {
        return $this->_codePostal=$scp;
    }

    /*---------------------
        Ville
    ---------------------*/
    public function getVille() 
    {
        return $this->_ville;
    }
    public function setVille($sville)  
    {
        return $this->_ville=$sville;
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
    


}












?>




