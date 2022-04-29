<!-- *****************************************************************************     
permet d'afficher la liste des stations de la base hotel
Base Hotel : à télécharger en cliquant sur le lien prévu à cet effet ...
****************************************************************************** -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Démo PHP</title>
</head>
<body>

<h1 style="color:blue;">Technique de Base ...<br><br>Le CRUD en PHP : Create Read Update Delete</h1>

<a href="https://ncode.amorce.org/ressources/Pool/TB/BDD_Requetes_MySQL/hotel.sql"><h2>Demo avec la base de données hotel à télécharger ici !</h2></a>

<!-- **********     connection à la base de données    ********** -->

<!-- 
host : adresse du serveur hébergeant la base de données (localhost ou votre serveur web)
dbname : nom de la base de données
charset : jeu de caractères utilisé
root : nom de l'utilisateur de la base de données, par exemple root
'' : Password
 -->

<?php

// si la ligne : 'require "connection_bdd.php";', ci-dessous est décommentée, 
// il faut commenter la ligne : '$db = new PDO('mysql:host=localhost;charset=utf8;dbname=hotel', 'root', '');'
// et décommenter la ligne : '$db = new PDO('mysql:host='.$host.';charset=utf8;dbname='.$base.'', $login, $password);'

//Rappel :
//Si vous décommentez la ligne 'require "connection_bdd.php";'ci-dessous, pour tester,
//vous devez commenter les 2 blocs try et catch ci-dessous
//et pensez également dans le fichier 'connection_bdd.php'
//à décommenter les 2 blocs try et catch;

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
        echo "N° : " . $e->getCode(). "<br>";
        die("Fin du script");
  }       
?>

<!-- **********     construction d'une requête    **********      -->

<?php

//sélectionne toutes les informations de la table 'station'
$requete = "SELECT * FROM station";
$result = $db->query($requete);

//pour votre culture ...cf pense bete.php

//permet de renvoyer le nombre de lignes renvoyées par une requête
//var_dump("nombre de lignes retournées par la requête : ".$result->rowCount());

//**********     Rappel  **********//

//si la requête renvoit un seul et unique résultat, on ne fait pas de boucle !
// $row = $result->fetch(PDO::FETCH_OBJ);

//dans la mesure où il y a un retour de plusieurs enregistrements, il faut inclure le résultat dans une boucle

//récupère, ligne par ligne, les informations attendues, que l'on doit inclure dans notre page HTML ...
//Pour info, se servir de la matrice ci-dessous !

while ($row = $result->fetch(PDO::FETCH_OBJ)) 
{ ?>

     <div> 
          <?php  echo $row->sta_nom; ?>
          <a href="detail.php?sta_id=<?php echo $row->sta_id ?>">    détail</a>
          <a href="modif.php?sta_id=<?php echo $row->sta_id ?>">    modifier</a>
          <a href="script_delete.php?sta_id=<?php echo $row->sta_id  ?>" onclick="Suppression();">    supprimer</a>
     </div>

<?php
}
     // sert à finir proprement une série de fetch(), libère la connection au serveur de BDD
     $result->closeCursor();
?>

<!--  **********************      MATRICE        **********************
ci-dessous, le code qui sert de matrice,
à supprimer, une fois les informations correctement collectées et insérées dans notre page HTML !
-->
<br><br>
<div>
     nom station
     <a href="detail.php?sta_id=X       ">    détail</a>
     <a href="modif.php?sta_id=X">    modifier</a>
     <a href="script_delete.php?sta_id=X" onclick="Suppression();">    supprimer</a>
</div>


<br><br>
<div>
     <a href="ajout.php"><button>Créer un nouvel enregistrement</button></a>
</div>

<script> 

function Suppression(){ 
     
     //Rappel : confirm() -> Bouton OK et Annuler, renvoit true (OK) ou false (Annuler)
     var resultat = confirm("Etes-vous certain de vouloir supprimer cet enregistrement ?");

     //pour visualiser le booléen en retour
     alert("Retour du booléen après avoir cliqué : "+ resultat+"\nRappel : OK vaut true et Annuler vaut false :");

     //annulation du comportemnt par défaut : redirection vers la page 'script_delete.php?sta_id=X'
     if (resultat==false){

     event.preventDefault();

     }
}

</script>
    
</body>
</html>