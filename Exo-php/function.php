<html>
    <body>
        <?php




function calcul($a, $b)
{
    $add = $a+$b;
    $sous = $a-$b;
    $multi = $a*$b;
    $div = $a/$b;
    return array($add, $sous, $multi, $div);
}



foreach(calcul(2, 4) as $elem)
{
    echo $elem."<br>";
}



?>