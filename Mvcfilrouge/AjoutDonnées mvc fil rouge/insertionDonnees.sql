
-- **************************
-- -- -- FOURNISSEUR -- -- --    
--***************************


INSERT INTO `fourni` (`pro_id`, `fou_id`, `prix_achat`, `qtite`, `date_com`, `date_livr`) VALUES
(1, 1, '120', 50, '2021-01-01', '2021-01-01'),
(2, 2, '220', 50, '2021-01-02', '2021-01-02'),
(3, 3, '320', 50, '2021-01-03', '2021-01-03'),
(4, 4, '420', 50, '2021-01-04', '2021-01-04'),
(5, 5, '520', 50, '2021-01-05', '2021-01-05');



--***************************
-- -- --  CATEGORIE -- --  --
--***************************

INSERT INTO `categorie` (`cat_id`, `cat_nom`, `cat_desc`, `cat_paren_id`) VALUES
(1, 'Guitare', 'La guitare est un instrument à cordes pincées. Les cordes sont disposées parallèlement à la table d''harmonie et au manche, généralement coupé de frettes, sur lesquelles on appuie les cordes, d''une main, pour produire des notes différentes', 1),
(2, 'Piano', 'Le piano est un instrument de musique à cordes frappées et à clavier. ', 2),
(3, 'Batteries', 'Une batterie est un ensemble d''instruments de percussion.', 3),
(4, 'Saxophone', 'Le saxophone est un instrument de musique à vent appartenant à la famille des bois. ', 4),
(5, 'Cable', 'Jack Câble Tressé en Nylon Plaqué Or pour Amplificateur, Électrique Basse. ', 5);


--***************************
-- --   COMMERCIAUX    --  --
--***************************

INSERT INTO `commerciaux` (`commerciaux_id`, `commerciaux_nom`, `commerciaux_prenom`, `commerciaux_type`) VALUES
(1, 'Tom', 'cafe', 'Professionnel'),
(2, 'Kobe', 'Raya', 'Pro'),
(3, 'Carre', 'John', 'Part'),
(4, 'Rider', 'Anthony', 'Part'),
(5, 'Montana', 'Tony', 'Pro');


--***************************
-- -- --  CLIENT  --   --  --
--***************************

INSERT INTO `client` (`cli_id`, `cli_nom`, `cli_type`, `cli_adresse`, `cli_codepostal`, `cli_ville`, `cli_password`, `cli_conf_password`, `cli_mail`, `cli_adresse_facturation`, `cli_adresse_livraison`, `cli_coef`, `cli_prenom`, `commerciaux_id`) VALUES
(2, 'Jordan', 'pro', '4 rue afpa', '80000', 'Creil', '12345679', '12345679', 'afpa13@gmail.com', '4 rue afpa', '5 rue afpa', '12.00', 'Jose', 2),
(3, 'Jordan', 'pro', '4 rue afpa', '80000', 'Creil', '12345699', '12345699', 'afpa14@gmail.com', '4 rue afpa', '6 rue afpa', '12.00', 'Tony', 3),
(4, 'Jordan', 'part', '4 rue afpa', '80000', 'Creil', '12345611', '12345611', 'afpa15@gmail.com', '4 rue afpa', '7 rue afpa', '10.00', 'Manille', 4),
(5, 'Jordan', 'part', '4 rue afpa', '80000', 'Creil', '12345622', '12345622', 'afpa16@gmail.com', '4 rue afpa', '8 rue afpa', '10.00', 'Luc', 5),
(23, 'DE SOUSA', 'professionnel', '4 rue allee afpa', '80000', 'Creil', '12345678', '12345678', 'tomlskdfsd@gmail.com', NULL, NULL, NULL, 'TRYSTAN', 1);


--***************************
-- --     COMMANDE     --  --
--***************************

INSERT INTO `commande` (`cmde_id`, `cmde_date`, `cmde_date_payements`, `cmde_reduc_total`, `cmde_adress_livraison`, `cmde_adress_facturation`, `cmde_type_payements`, `cli_id`) VALUES
(1, '2021-01-10', '2021-01-10', '12.00', '4 rue afpa', '4 rue afpa', '1.00', 23),
(2, '2021-02-10', '2021-02-10', '12.00', '5 rue afpa', '5 rue afpa', '1.00', 2),
(3, '2021-03-10', '2021-03-10', '12.00', '6 rue afpa', '6 rue afpa', '1.00', 3),
(4, '2021-04-10', '2021-04-10', '12.00', '7 rue afpa', '7 rue afpa', '2.00', 4),
(5, '2021-05-10', '2021-05-10', '12.00', '8 rue afpa', '8 rue afpa', '2.00', 5);

--***************************
-- --     PRODUITS    --  --
--***************************


INSERT INTO `produits` (`pro_id`, `pro_name`, `pro_description`, `pro_prix_ht`, `pro_qtite`, `pro_qtit_ale`, `pro_photo`, `cat_id`) VALUES
(1, 'Guitare ibanez', 'La guitare Ibanez V50 a un son suffisamment puissant pour jouer des arpèges clairs et envoûtants,', '120.00', 50, 10, 'http://localhost/mvcfilrouge/assets/images/guitare1.png', 1),
(2, 'Piano kawasaki', 'Fabuleux piano Kawasaki en bois ...', '220.00', 50, 10, 'http://localhost/mvcfilrouge/assets/images/piano.png', 2),
(3, 'Batterie', 'Une batterie est un ensemble d'' instruments de percussion (de type fûts et cymbales) disposé pour être joué par une seule personne à l''aide de baguettes et de pédales.', '320.00', 50, 10, 'http://localhost/mvcfilrouge/assets/images/batterie.png', 3),
(4, 'Saxophone', 'Le saxophone est un instrument de musique à vent appartenant à la famille des bois. Il a été inventé par le Belge Adolphe Sax et breveté à Paris le 21 mars 1846.', '320.00', 50, 10, 'http://localhost/mvcfilrouge/assets/images/saxo.png', 3),
(5, 'Cable Jack ', 'cable pour connecter les écouteurs, micro ...', '20.00', 50, 10, 'http://localhost/mvcfilrouge/assets/images/cable.png', 3);


--***************************
-- --     LIVRAISON    --  --
--***************************

INSERT INTO `livraison` (`livraison_id`, `livraison_qte`, `livraison_total_commande`, `cmde_id`) VALUES
(1, 1, '25.00', 1),
(2, 2, '325.00', 2),
(3, 3, '25.00', 3),
(4, 4, '225.00', 4),
(5, 5, '305.00', 5);

--***************************
-- --     FOURNI   --  --
--***************************

INSERT INTO `fourni` (`pro_id`, `fou_id`, `prix_achat`, `qtite`, `date_com`, `date_livr`) VALUES
(1, 1, '120', 50, '2021-01-01', '2021-01-01'),
(2, 2, '220', 50, '2021-01-02', '2021-01-02'),
(3, 3, '320', 50, '2021-01-03', '2021-01-03'),
(4, 4, '420', 50, '2021-01-04', '2021-01-04'),
(5, 5, '520', 50, '2021-01-05', '2021-01-05');

--***************************
-- --     COMPOSER   --  --
--***************************


INSERT INTO `composer` (`pro_id`, `cmde_id`, `qtite_com`) VALUES
(1, 1, 10),
(2, 2, 20),
(3, 3, 30),
(4, 4, 40),
(5, 5, 50);


--***************************
-- --     CONTIENT     --  --
--***************************

INSERT INTO `contient` (`pro_id`, `livraison_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);