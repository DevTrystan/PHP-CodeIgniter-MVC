<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller 
{

        public function myform()
        {

                $this->load->view('header');

                $this->load->helper(array('form', 'url'));

                 // Chargement de la librairie 'database'
                $this->load->database(); 

                $this->load->library('form_validation');

                if ($this->input->post()) 
                { // 2ème appel de la page: traitement du formulaire

                    $data = $this->input->post();

                $this->form_validation->set_rules('cli_nom', 'nom', 'required|is_unique[client.cli_nom]',
                        array(
                            "required" => "Ajouter un %s.",
                            "is_unique" => "Ce %s existe déjà."
                            )
                        );

                $this->form_validation->set_rules('cli_prenom', 'prenom', 'required',
                        array(
                            "required" => "Ajouter un %s."
                            )
                        );
                $this->form_validation->set_rules('cli_type', 'type', 'required',
                        array(
                            "required" => "Ajouter le %s."
                            )
                        );

                $this->form_validation->set_rules('cli_adresse', 'l\'adresse', 'required',
                        array(
                            "required" => "Ajouter %s."
                            )
                        );

                $this->form_validation->set_rules('cli_codepostal', 'code postale', 'required',
                        array(
                            "required" => "Ajouter le %s."
                            )
                        );        

                        
                $this->form_validation->set_rules('cli_ville', 'ville', 'required',
                array(
                    "required" => "Ajouter la %s."
                    )
                );     

                        
                $this->form_validation->set_rules('cli_password', 'mot de passe', 'trim|required|min_length[8]|max_length[12]',
                        array(
                            'required' => '%s incorect',
                            'min_length'=>'Le mot de passe doit contenir 8 caractere minimum',
                            'max_length'=>'Le mot de passe doit contenir 12 caractere maximum'
                            )
                     );
                $this->form_validation->set_rules('cli_conf_password', 'Confirmez', 'trim|required|matches[cli_password]|min_length[8]|max_length[12]', 
                        array(
                            "required" => " %s votre mot de passe.",
                            'min_length'=>'Le mot de passe doit contenir 8 caractere minimum',
                            'max_length'=>'Le mot de passe doit contenir 12 caractere maximum',
                            'matches' => 'Les mot de passe ne sont pas identique'
                        )
                    );
                $this->form_validation->set_rules('cli_mail', 'Email', 'trim|required|valid_email',
                        array(
                            "required" => " %s invalide.",
                            "valid_email" => "Email non valide"
                        )
                    );

            
                    if ($this->form_validation->run() == FALSE)
                    { // Echec de la validation, on réaffiche la vue formulaire 
            
                          $this->load->view('myform');
                    }
                    else
                    { // La validation a réussi, nos valeurs sont bonnes, on peut insérer en base
            
                        $this->db->insert('client', $data);
            
                        redirect("form/myform");
                    }       
                } 
                else 
                { // 1er appel de la page: affichage du formulaire
                       $this->load->view('myform');
                }
                    $this->load->view('footer');
                }
            }