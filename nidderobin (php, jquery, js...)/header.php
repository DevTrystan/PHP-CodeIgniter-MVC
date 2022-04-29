<?php // Exemple 27-2 : header.php
  session_start();

echo <<<_INITIAL
<!doctype html> 
<html lang="fr">
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'> 
    <link rel='stylesheet' href='jquery.mobile-1.4.5.min.css'>
    <link rel='stylesheet' href='style.css' type='text/css'>
    <script src='javascript.js'></script>
    <script src='jquery-2.2.4.min.js'></script>
    <script src='jquery.mobile-1.4.5.min.js'></script>

_INITIAL;

  require_once 'functions.php';

  $userstr = 'Bienvenue, cher invité';

  if (isset($_SESSION['user']))
  {
    $user     = $_SESSION['user'];
    $loggedin = TRUE;      // Utilisateur identifié
    $userstr  = "Connecté en tant que : $user";
  }
  else $loggedin = FALSE;  // Utilisateur non identifié

echo <<<_PRINCIPAL
    <title>Nid de Robin - $userstr</title>
  </head>
  <body>
    <div data-role='page'>
      <div data-role='header'>
        <div id='logo' class='center'>Nid de R<img id='robin' src='robin.gif' alt='photo robin'>bin</div>
        <div class='username'>$userstr</div>
      </div>
      <div data-role='content'>

_PRINCIPAL;

  if ($loggedin)
  {
echo <<<_CONNECTE
        <div class='center'>
          <a data-role='button' data-inline='true' data-icon='home'
            data-transition="slide" href='members.php?view=$user'>Accueil</a>
          <a data-role='button' data-inline='true' data-icon='user'
            data-transition="slide" href='members.php'>Membres</a>
          <a data-role='button' data-inline='true' data-icon='heart'
            data-transition="slide" href='friends.php'>Amis</a><br>
          <a data-role='button' data-inline='true' data-icon='mail'
            data-transition="slide" href='messages.php'>Messages</a>
          <a data-role='button' data-inline='true' data-icon='edit'
            data-transition="slide" href='profile.php'>Mon profil</a>
          <a data-role='button' data-inline='true' data-icon='action'
            data-transition="slide" href='logout.php'>Se déconnecter</a>
        </div>
        
_CONNECTE;
  }
  else
  {
echo <<<_INVITE
        <div class='center'>
          <a data-role='button' data-inline='true' data-icon='home'
            data-transition='slide' href='index.php'>Accueil</a>
          <a data-role='button' data-inline='true' data-icon='plus'
            data-transition="slide" href='signup.php'>S'inscrire</a>
          <a data-role='button' data-inline='true' data-icon='check'
            data-transition="slide" href='login.php'>Se connecter</a>
        </div>
        <p class='info'>(Connectez-vous pour utiliser cette application)</p>
        
_INVITE;
  }
?>
