<?php
// application/controllers/Controle_home.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Scriptajout extends CI_Controller 
{

    public function ajouter()
    {

        $this->load->view('header');
        // Chargement des assistants 'form' et 'url'
   $this->load->helper('form', 'url'); 

   // Chargement de la librairie 'database'
   $this->load->database(); 
   $resultcat = $this->db->query("SELECT * FROM categorie");
   
   $aListecat = $resultcat->result();
   $aView["liste_categorie"] = $aListecat;
   // Chargement de la librairie form_validation
   $this->load->library('form_validation'); 

    if ($this->input->post()) 
   { // 2ème appel de la page: traitement du formulaire

        $data = $this->input->post();
        
        // Définition des filtres, ici une valeur doit avoir été saisie pour le champ 'pro_ref'
        $this->form_validation->set_rules("pro_name", "nom", "required", array("required" => "Ajouter le %s de votre produit."));
        $this->form_validation->set_rules("pro_description", "Renseignez", "required", array("required" => " %s une desciption sur votre produit ici."));
        $this->form_validation->set_rules("pro_prix_ht", "prix HT", "required", array("required" => "Le %s doit être renseigné."));
        $this->form_validation->set_rules("pro_qtite", "quantité", "required", array("required" => "La %s est obligatoire."));
        $this->form_validation->set_rules("pro_qtit_ale", "quantité du stock min", "required", array("required" => "La %s est obligatoire."));
        $this->form_validation->set_rules("pro_photo", "Ajouter", "required", array("required" => " %s une photo."));
        if ($this->form_validation->run() == FALSE)
        { // Echec de la validation, on réaffiche la vue formulaire 

            $this->load->view('ajouter', $aView);
        }
        else
        { // La validation a réussi, nos valeurs sont bonnes, on peut insérer en base

            $this->db->insert('produits', $data);

            redirect("scriptliste/liste");
        }       
    } 
    else 
    { // 1er appel de la page: affichage du formulaire
        $this->load->view('ajouter', $aView);
    }
        $this->load->view('footer');
    }
}