<?php // Exemple 27-4 : index.php
  session_start();
  require_once 'header.php';

  echo "<div class='center'>Bienvenue dans le Nid de Robin";

  if ($loggedin) echo ", $user, vous êtes connecté.";
  else           echo '.<br>Inscrivez-vous ou connectez-vous pour nous rejoindre.';

  echo <<<_END
      </div><br>
    </div>
    <div data-role="footer">
       <h4>Application web de <i><a href='http://www.goulet.ca/lpmjs5.php'
        target='_blank'>Développer un site web en PHP, MySQL et JavaScript, 5<sup>e</sup> édition</a></i></h4>
    </div>
  </body>
</html>
_END;
?>
