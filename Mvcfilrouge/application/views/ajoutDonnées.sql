-- ***************************
-- -- -- Commerciaux -- -- --*
-- ***************************

INSERT INTO `commerciaux`(`commerciaux_id`, `commerciaux_nom`, `commerciaux_prenom`, `commerciaux_type`) VALUES (2,"Kobe","Raya","Pro"),
                                                                                                                (3,"Cofe","John","Part"),
                                                                                                                (4,"Rider","Anthony","Part"),
                                                                                                                (5,"Montana","Tony","Pro");
                                                                                                                
-- ***************************
-- -- -- Fournisseurs -- -- --*
-- ***************************

INSERT INTO `fournisseur`(`fou_id`, `fou_nom`, `fou_prenom`, `fou_rue`, `fou_cp`, `fou_ville`, `fou_tel`)
 VALUES (1,"Ibanez","José","1, rue Ibanez ","80000","Amiens","0625300000"),
        (2,"Ibanez","José","1, rue Ibanez ","60100","Creil","0600000000"),
        (3,"Ibanez","José","1, rue Ibanez ","60300","Senlis","0642886644"),
        (4,"Ibanez","José","1, rue Ibanez ","80040","Poix","0668688633"),
        (5,"Ibanez","José","1, rue Ibanez ","33000","Bordeaux","0663556388");

-- ***************************
-- -- -- Categorie -- -- --*
-- ***************************
INSERT INTO `categorie`(`cat_id`, `cat_nom`, `cat_desc`, `cat_paren_id`)
 VALUES (2,"Piano","Le piano est un instrument de musique à cordes frappées et à clavier. ",2),
        (3,"Batteries","Une batterie est un ensemble d' instruments de percussion. ",3),
        (4,"Saxophone","Le saxophone est un instrument de musique à vent appartenant à la famille des bois. ",4),
        (5,"Cable","Jack Câble Tressé en Nylon Plaqué Or pour Amplificateur, Électrique Basse. ",5);


-- ***************************
-- -- -- Client -- -- --*
-- ***************************  

INSERT INTO `client`(`cli_id`, `cli_nom`, `cli_type`, `cli_adresse`, `cli_codepostal`, `cli_ville`, `cli_password`, `cli_conf_password`, `cli_mail`, `cli_adresse_facturation`, `cli_adresse_livraison`, `cli_coef`, `cli_prenom`, `commerciaux_id`)
 VALUES (1,"Jordan","pro","4 rue afpa","80000","Creil","12345678","12345678","afpa12@gmail.com","4 rue afpa","4 rue afpa",12,"Michael",1),
        (2,"Jordan","pro","4 rue afpa","80000","Creil","12345679","12345679","afpa13@gmail.com","5 rue afpa","5 rue afpa",12,"Jose",2),
        (3,"Jordan","pro","4 rue afpa","80000","Creil","12345699","12345699","afpa14@gmail.com","6 rue afpa","6 rue afpa",12,"Tony",3),
        (4,"Jordan","part","4 rue afpa","80000","Creil","12345611","12345611","afpa15@gmail.com","7 rue afpa","7 rue afpa",10,"Manille",4),
        (5,"Jordan","part","4 rue afpa","80000","Creil","12345622","12345622","afpa16@gmail.com","8 rue afpa","8 rue afpa",10,"Luc",5);

-- ***************************
-- -- -- Commande-- -- --*
-- *************************** 

        INSERT INTO `commande`(`cmde_id`, `cmde_date`, `cmde_date_payements`, `cmde_reduc_total`, `cmde_adress_livraison`, `cmde_adress_facturation`, `cmde_type_payements`, `cli_id`) 
        VALUES (1,'2021-01-10','2021-01-10',12,"4 rue afpa","4 rue afpa",1,23),
               (2,'2021-02-10','2021-02-10',12,"5 rue afpa","5 rue afpa",1,2),
               (3,'2021-03-10','2021-03-10',12,"6 rue afpa","6 rue afpa",1,3),
               (4,'2021-04-10','2021-04-10',12,"7 rue afpa","7 rue afpa",2,4),
               (5,'2021-05-10','2021-05-10',12,"8 rue afpa","8 rue afpa",2,5);

-- ***************************
-- -- -- Produits-- -- --*
-- *************************** 

        INSERT INTO `produits`(`pro_id`, `pro_name`, `pro_description`, `pro_prix_ht`, `pro_qtite`, `pro_qtit_ale`, `pro_photo`, `cat_id`)
        VALUES (1,"Guitare ibanez","La guitare Ibanez V50 a un son suffisamment puissant pour jouer des arpèges clairs et envoûtants,",
                120,50,10,"http://localhost/mvcfilrouge/assets/images/guitare1.png",1),
                (2,"Piano kawasaki","Fabuleux piano Kawasaki en bois ...",
                220,50,10,"http://localhost/mvcfilrouge/assets/images/piano.png",2),
                (3,"Batterie","Une batterie est un ensemble d' instruments de percussion (de type fûts et cymbales) disposé pour être joué par une seule personne à l'aide de baguettes et de pédales.",
                320,50,10,"http://localhost/mvcfilrouge/assets/images/batterie.png",3),
                (4,"Saxophone","Le saxophone est un instrument de musique à vent appartenant à la famille des bois. Il a été inventé par le Belge Adolphe Sax et breveté à Paris le 21 mars 1846.",
                320,50,10,"http://localhost/mvcfilrouge/assets/images/saxo.png",3),
                 (5,"Cable Jack ","cable pour connecter les écouteurs, micro ...",
                20,50,10,"http://localhost/mvcfilrouge/assets/images/cable.png",3);



-- ***************************
-- -- -- Livraison-- -- --*
-- *************************** 

INSERT INTO `livraison`(`livraison_id`, `livraison_qte`, `livraison_total_commande`, `cmde_id`) 
VALUES  (1,1,25,1),
        (2,2,325,2),
        (3,3,25,3),
        (4,4,225,4),
        (5,5,305,5);

-- ***************************
-- -- -- Fourni-- -- --*
-- *************************** 

INSERT INTO `fourni`(`pro_id`, `fou_id`, `prix_achat`, `qtite`, `date_com`, `date_livr`) 
VALUES (1,1,120,50,"2021/01/01","2021/01/01"),
        (2,2,220,50,"2021/01/02","2021/01/02"),
        (3,3,320,50,"2021/01/03","2021/01/03"),
        (4,4,420,50,"2021/01/04","2021/01/04"),
        (5,5,520,50,"2021/01/05","2021/01/05");
        
-- ***************************
-- -- -- Composer-- -- --*
-- *************************** 
INSERT INTO `composer`(`pro_id`, `cmde_id`, `qtite_com`)
VALUES (1,1,10),
       (2,2,20),
       (3,3,30),
       (4,4,40),
       (5,5,50);


-- ***************************
-- -- -- Contient-- -- --*
-- ***************************        

INSERT INTO `contient`(`pro_id`, `livraison_id`)
 VALUES (1,1),
        (2,2),
        (3,3),
        (4,4),
        (5,5);