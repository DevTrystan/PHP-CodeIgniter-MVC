<?php // Exemple 27-1 : functions.php
  $dbhost  = 'localhost';    // Hôte probable
  $dbname  = 'nidderobin';   // Modifiez ces...
  $dbuser  = 'nidderobin';   // ...variables en fonction
  $dbpass  = 'ndrpassword';  // ...de votre installation

  $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
  if ($connection->connect_error) die("Erreur fatale");

  // Imposer le jeu de caractères utf8 dans toutes les requêtes suivantes
  $query = 'SET NAMES utf8';
  $result = $connection->query($query);
  if (!$result) die("Erreur fatale");

  function createTable($name, $query)
  { // Nous imposons le jeu de caractères utf8
    queryMysql("CREATE TABLE IF NOT EXISTS $name($query) CHARSET utf8");
    echo "Table '$name' créée ou existe déjà.<br>";
  }

  function queryMysql($query)
  {
    global $connection;
    $result = $connection->query($query);
    if (!$result) die("Erreur fatale");
    return $result;
  }

  function destroySession()
  {
    $_SESSION=array();

    if (session_id() != "" || isset($_COOKIE[session_name()]))
      setcookie(session_name(), '', time()-2592000, '/');

    session_destroy();
  }

  function sanitizeString($var)
  {
    global $connection;
    $var = strip_tags($var);
    $var = htmlentities($var);
    if (get_magic_quotes_gpc())
      $var = stripslashes($var);
    return $connection->real_escape_string($var);
  }

  function showProfile($user)
  {
    if (file_exists("$user.jpg"))
      echo "<img src='$user.jpg' style='float:left;'>";

    $result = queryMysql("SELECT * FROM profiles WHERE user='$user'");

    if ($result->num_rows)
    {
      $row = $result->fetch_array(MYSQLI_ASSOC);
      echo stripslashes($row['text']) . "<br style='clear:left;'><br>";
    }
    else echo "<p>Rien à voir ici pour l'instant</p><br>";
  }
?>

