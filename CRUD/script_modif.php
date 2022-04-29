<?php 
//dans ce fichier, nous récupérons les informations pour réaliser la requête de modification : UPDATE

//récupération des informations passées en POST, nécessaires à la modification

$id_station=$_POST['id'];
$nom_station=$_POST['nom'];
$altitude_station=$_POST['altitude'];

//**********     connection à la base de données    **********

// si la ligne : 'require "connection_bdd.php";', ci-dessous est décommentée, 
// il faut commenter la ligne : '$db = new PDO('mysql:host=localhost;charset=utf8;dbname=hotel', 'root', '');'
//et décommenter la ligne : '$db = new PDO('mysql:host='.$host.';charset=utf8;dbname='.$base.'', $login, $password);'

//require "connection_bdd.php";

try{        
    $db = new PDO('mysql:host=localhost;charset=utf8;dbname=hotel', 'root', '');
    //$db = new PDO('mysql:host='.$host.';charset=utf8;dbname='.$base.'', $login, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (Exception $e) {
    echo "Erreur : " . $e->getMessage() . "<br>";
    echo "N° : " . $e->getCode();
    die("Fin du script");
}  

//construction de la requête UPDATE sans injection SQL

$requete = $db->prepare("UPDATE station SET sta_nom=:sta_nom, sta_altitude=:sta_altitude WHERE sta_id=:sta_id");

$requete->bindValue(':sta_nom', $nom_station, PDO::PARAM_STR);
$requete->bindValue(':sta_altitude', $altitude_station, PDO::PARAM_INT);
$requete->bindValue(':sta_id', $id_station, PDO::PARAM_INT);

$requete->execute();

//libère la connection au serveur de BDD
$requete->closeCursor();

//redirection vers la page index.php 
header("Location: index.php");

?>