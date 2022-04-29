<?php
// application/controllers/Controle_home.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Scriptliste extends CI_Controller 
{

    public function liste()
    {

    $this->load->view('header');
            // Charge la librairie 'database'
    $this->load->database();


    
    // Exécute la requête 
    $results = $this->db->query("SELECT * FROM produits");  

    // Récupération des résultats    
    $aListe = $results->result();   
     

    // Ajoute des résultats de la requête au tableau des variables à transmettre à la vue   
    $aView["liste_produits"] = $aListe;

    

    // Appel de la vue avec transmission du tableau  
    $this->load->view('liste', $aView);

        $this->load->view('footer');
    }
}