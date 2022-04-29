<?php




class PersonnageDefault
{
    private $_nom  ;
    private $_prenom ;
    private $_age;
    private $_sexe ;
    
    //NOM
    public function getNom()
    {
        return $this->_nom = "Loper" ;
        
    }
    public function setNom($_nom)
    {
        return $this->_nom = "Loper";
    }

    //PRENOM
    public function getPrenom()
    {
        return $this->_prenom = "Dave" ;
        
    }
    public function setPrenom($_prenom)
    {
        return $this->_prenom =  "Dave";
    }

    //AGE
    public function getAge()
    {
        return $this->_age = 18 ;
        
    }
    public function setAge($_age)
    {
        return $this->_age = 18;
    }

    // SEXE
    public function getSexe()
    {
        return $this->_sexe = "Masculin";
        
    }
    public function setSexe($_age)
    {
        return $this->_sexe = "Masculin";
    }

    
    
    

}


?>
