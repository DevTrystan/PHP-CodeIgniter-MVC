<?php


/*echo'<p><strong> Exercie 1 Datetime</strong></p>';

setlocale(LC_TIME, 'fr');
echo strftime(" Nous somme le : %A  %d %B %Y."); */


/*echo'<p><strong> Exercie 2 Datetime</strong></p>';


echo date("W",mktime(0,0,0,7,14,2019));*/


echo'<p><strong> Exercie 3 Datetime</strong></p>';

$datej = new datetime();

$date2 = new datetime("08-04-2021");
$interval = $datej->diff($date2);

echo $interval->format(' Il reste %a jours avant la fin de la formation');
/*$date1= date('d/m/y');
$date1 = date_default_timezone_set('Europe/Paris');
var_dump($date1);*/








?>