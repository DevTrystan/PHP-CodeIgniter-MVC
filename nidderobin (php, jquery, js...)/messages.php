<?php // Exemple 27-11 : messages.php
  require_once 'header.php';
  
  // Si l'utilisateur n'est pas connecté, on sort.
  if (!$loggedin) die("</div></body></html>");

  // Sinon, on continue
  if (isset($_GET['view'])) $view = sanitizeString($_GET['view']);
  else                      $view = $user;

  if (isset($_POST['text']))
  {
    $text = sanitizeString($_POST['text']);

    if ($text != "")
    {
      $pm   = substr(sanitizeString($_POST['pm']),0,1);
      $time = time();
      queryMysql("INSERT INTO messages VALUES(NULL, '$user',
        '$view', '$pm', $time, '$text')");
    }
  }

  if ($view != "")
  {
    if ($view == $user)
    {
      $name1 = $name2 = "Vos";
      echo "<h3>$name1 messages</h3>";
    }
    else
    {
      $name1 = "<a href='members.php?view=$view'>$view</a>";
      $name2 = "$view -";
      echo "<h3>Messages de $name1</h3>";
    }

    showProfile($view);
    
    echo <<<_END
      <form method='post' action='messages.php?view=$view'>
        <fieldset data-role="controlgroup" data-type="horizontal">
          <legend>Écrivez votre message&nbsp;:</legend>
          <input type='radio' name='pm' id='public' value='0' checked='checked'>
          <label for="public">Public</label>
          <input type='radio' name='pm' id='private' value='1'>
          <label for="private">Privé</label>
        </fieldset>
      <textarea name='text'></textarea>
      <input data-transition='slide' type='submit' value='Publier le message'>
    </form><br>
_END;

    date_default_timezone_set('UTC');

    // Section de suppression de message
    if (isset($_GET['erase']))
    {
      $erase = sanitizeString($_GET['erase']);
      queryMysql("DELETE FROM messages WHERE id=$erase AND recip='$user'");
    }
    
    // Section d'affichage des messages
    if ($view == $user)
    { // Si l'utilisateur lit ses messages
      $query  = "SELECT * FROM messages ORDER BY time DESC";
    }
    else
    { // Si l'utilisateur lit les messages d'un autre utilisateur
      $query  = "SELECT * FROM messages WHERE auth='$view' ORDER BY time DESC";
    }
    $result = queryMysql($query);
    $num    = $result->num_rows;
    
    for ($j = 0 ; $j < $num ; ++$j)
    {
      $row = $result->fetch_array(MYSQLI_ASSOC);
      
      // Section de filtrage des messages
      if ($row['pm'] == 0 || $row['auth'] == $user ||
          $row['recip'] == $user)
      { // Et affichage
        echo date('d/m \à H \h i', $row['time']);
        echo " <a href='messages.php?view=" . $row['auth'] .
             "'>" . $row['auth']. "</a> ";

        if ($row['pm'] == 0)
          echo "a écrit&nbsp;: &laquo;&nbsp;" . $row['message'] . "&nbsp;&raquo; ";
        else
          echo "a chuchoté&nbsp;: <span class='whisper'>&laquo;&nbsp;" .
            $row['message']. "&nbsp;&raquo;</span> ";

        if ($row['recip'] == $user)
          echo "[<a href='messages.php?view=$view" .
               "&erase=" . $row['id'] . "'>suppr.</a>]";

        echo "<br>";
      }
    }
  }

  if (!$num)
    echo "<br><span class='info'>Aucun message</span><br><br>";

  echo "<br><a data-role='button'
        href='messages.php?view=$view'>Actualiser</a>";
?>

    </div><br>
  </body>
</html>
