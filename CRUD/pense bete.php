
<?php

//var-dump("mon message ..."); :  affiche les informations structurées d'une variable, y compris son type et sa valeur.

//permet de renvoyer le nombre de lignes renvoyées par une requête
var_dump("nombre de lignes retournées par la requête : ".$result->rowCount());

//permet d'afficher un Alert()
echo '<script>alert("Afficher un alert() en PHP !");</script>';


//pour tester la connection à la base de données avec la fonction connect()
//exécutez le fichier index_avec_fonction.php 
//dans lequel il y a un require du fichier connection_bdd_avec_fonction.php ...

?>