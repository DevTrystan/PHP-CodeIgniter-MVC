<html>
    <body>
    
<?php
// Exo1
/*$a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
    "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
    "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
    );
    
    foreach ($a as $mois => $valeur ) 
    { 
        if($mois== "19002")
        {
            echo  $cle = array_search("Validation", $valeur )+ 1;
        }
    
    }*/

 // Exo 2
/*$mem = -1; // variable
foreach ($a['19001'] as $value => $val)
{
if ($val == "Stage")
    {
        $mem = $value;
        
    }
}
echo ($mem);  // memoire*/

//Exo 3
foreach($a as $k=>$v)
{
$i = array_keys($a);
}
echo var_dump($i);

$i = array();
foreach ($a as $k => $v)
{
echo  "$k";
array_push($i, $k);

}   
var_dump($i);

/*//Exo 4 
$t = array ();
foreach ($a['19003'] as $k =>$v)
{
    if($v == "Stage")
    {
    array_push($t,$v);

    }
}
echo count($t);*/






    ?>