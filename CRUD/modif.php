<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modification</title>

</head>
<body>

<h1>  Modification d'un enregistrement </h1>

<a href="index.php"><button>Retour à la liste des stations</button></a>
<br>
<br>

<?php

//Pour votre cultrure personnelle ... permet d'afficher un Alert() en PHP
echo '<script>alert("Vous êtes arrivés sur la page modif.php de SUPERMAN !!!");</script>';


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

        echo "La connection à la base e données a échoué ! <br>";
        echo "Merci de bien vérifier vos paramètres de connection ...<br>";
        echo "Erreur : " . $e->getMessage() . "<br>";
        echo "N° : " . $e->getCode();
        die("Fin du script");
}       
?>

<!-- construction d'une requête -->

<?php

$sta_id=$_GET['sta_id'];//récupération de l'identifiant envoyé en méthode Get --> dans l'URL

// construction de la requête
$requete = "SELECT * FROM station where sta_id=".$sta_id;
$result = $db->query($requete);

//si la requête renvoit un seul et unique résultat, on ne fait pas de boucle !
 $row = $result->fetch(PDO::FETCH_OBJ); 

//libère la connection au serveur de BDD
$result->closeCursor();
 
 ?>

<div>


<!-- afin de servir de MATRICE -->

<?php

 //echo   $row->sta_id."<br>";
 //echo   $row->sta_nom."<br>";
 //echo   $row->sta_altitude."<br><br>";

?>



<!-- action ="http://bienvu.net/script.php" pour tester le passage des informations à traiter -->
<form action ="script_modif.php" method="post">

    <div>
        <!-- ci-dessous, le label doit être mis en commentaire si le input concerné est en type="hidden" = caché  -->
        <label>Identifiant de la station</label><br>
        <!-- ci-dessous le input de l'identifiant que l'on doit mettre en type="hidden" = caché 
        car il ne doit être visible        
        -->
        <input type="text" value="<?php echo $row->sta_id ?>"  name="id" readonly> 
    </div>
    <br>

    <div>
        <label for="nom_for_label">Nom de la station</label><br>
        <input type="text" value="<?php echo $row->sta_nom ?>" name="nom" id="nom_for_label">
    </div>
    <br>


    <div>
        <label for="altitude_for_label">Altitude</label><br>
        <input type="text" value="<?php echo $row->sta_altitude ?>"  name="altitude" id="altitude_for_label">
    </div>

    <br>

    <input type="submit" value="Valider les modifications" onclick="verif();">

</form>

<script>

//vérifie si on envoit ou non le formulaire à "script_modif.php"
function verif(){ 

    //Rappel : confirm() -> Bouton OK et Annuler, renvoit true ou false
    var resultat = confirm("Etes-vous certain de vouloir modifier cet enregistrement ?");

    //alert("retour :"+ resultat);

    if (resultat==false){

    alert("Vous avez annulé les modifications \nAucune modification ne sera apportée à cet enregistrement !");

    //annule l'évènement par défaut ... SUBMIT vers "script_modif.php"
    event.preventDefault();    

    }

    
}



</script>





    
</body>
</html>