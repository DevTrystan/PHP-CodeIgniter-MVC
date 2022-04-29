<?php // Exemple 26-9 : members.php
  require_once 'header.php';

  if (!$loggedin) die("</div></body></html>");

  if (isset($_GET['view']))
  {
    $view = sanitizeString($_GET['view']);
    
    if ($view == $user)
    {
      $name = "vos";
      echo "<h3>Votre profil</h3>";
      showProfile($view);
      echo "<a data-role='button' data-transition='slide'
           href='messages.php?view=$view'>Voir $name messages</a>";
    }
    else
    {
      $name = "$view";
      echo "<h3>Profil de $name</h3>";
      showProfile($view);
      echo "<a data-role='button' data-transition='slide'
           href='messages.php?view=$view'>Voir les messages de $name</a>";
    }
    die("</div></body></html>");
  }

  if (isset($_GET['add']))
  {
    $add = sanitizeString($_GET['add']);

    $result = queryMysql("SELECT * FROM friends WHERE user='$add' AND friend='$user'");
    if (!$result->num_rows)
      queryMysql("INSERT INTO friends VALUES ('$add', '$user')");
  }
  elseif (isset($_GET['remove']))
  {
    $remove = sanitizeString($_GET['remove']);
    queryMysql("DELETE FROM friends WHERE user='$remove' AND friend='$user'");
  }

  $result = queryMysql("SELECT user FROM members ORDER BY user");
  $num    = $result->num_rows;

  echo "<h3>Autres membres</h3><ul>";

  for ($j = 0 ; $j < $num ; ++$j)
  {
    $row = $result->fetch_array(MYSQLI_ASSOC);
    if ($row['user'] == $user) continue;
    
    echo "<li><a data-transition='slide' href='members.php?view=" .
      $row['user'] . "'>" . $row['user'] . "</a>";
    $follow = "suivre";

    $result1 = queryMysql("SELECT * FROM friends WHERE
      user='" . $row['user'] . "' AND friend='$user'");
    $t1      = $result1->num_rows;
    $result1 = queryMysql("SELECT * FROM friends WHERE
      user='$user' AND friend='" . $row['user'] . "'");
    $t2      = $result1->num_rows;

    if (($t1 + $t2) > 1) echo " &harr; est un ami mutuel";
    elseif ($t1)         echo " &larr; vous le suivez";
    elseif ($t2)       { echo " &rarr; vous suit";
                         $follow = "récip."; }
    
    if (!$t1) echo " [<a data-transition='slide'
      href='members.php?add=" . $row['user'] . "'>$follow</a>]";
    else      echo " [<a data-transition='slide'
      href='members.php?remove=" . $row['user'] . "'>suppr.</a>]";
  }
?>
    </ul></div>
  </body>
</html>
