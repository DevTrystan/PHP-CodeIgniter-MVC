<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail</title>
</head>
<body>

<div>

 <a href="index.php"><button>liste des stations </button></a> 
<br>
<br>

</div>

<!--      **********     connection à la base de données    **********          -->
<?php

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

        echo "La connection à la base e données a échoué ! <br>";
        echo "Merci de bien vérifier vos paramètres de connection ...<br>";
        echo "Erreur : " . $e->getMessage() . "<br>";
        echo "N° : " . $e->getCode();
        die("Fin du script");

   }       
?>

<!-- construction d'une requête -->
<?php

//récupération de l'identifiant concerné, passé en GET
$sta_id=$_GET['sta_id'];

$requete = "SELECT * FROM station where sta_id=".$sta_id;
$result = $db->query($requete);

//si la requête renvoit un seul et unique résultat, on ne fait pas de boucle, contrairement à la page index.php !
//ici c'est le cas, récupération du résultat de la requête

 $row = $result->fetch(PDO::FETCH_OBJ);
 
 //libère la connection au serveur de BDD
 $result->closeCursor();
 ?>

<div>

     Identifiant : <?php echo   $row->sta_id."<br>"; ?>
     Nom de la station : <?php echo   $row->sta_nom."<br>"; ?>
     Altitude de la station : <?php  echo   $row->sta_altitude."<br>"; ?>

</div>
    
</body>
</html>