<?php // Exemple 27-12 : logout.php
  require_once 'header.php';

  if (isset($_SESSION['user']))
  {
    destroySession();
    echo "<br><div class='center'>Vous êtes déconnecté. 
         <a data-transition='slide' href='index.php'>Cliquez ici</a>
          pour actualiser la page.</div>";
  }
  else echo "<div class='center'>Vous ne pouvez vous déconnecter
            car vous n'êtes pas encore connecté.</div>";
?>
    </div>
  </body>
</html>