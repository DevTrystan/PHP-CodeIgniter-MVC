
<?php


    

$a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
      "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
      "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
    );

//     // ***Exo 1 avec boucle for !!!
// // var_dump($a["19002"]);
// for($i=0;$i<count($a["19002"]);$i++)
// {
      
//     //$stock = $a["19002"][$i];

//     if($a["19002"][$i]== "Validation")
//     {
//        echo " La semaine de Validation est le : ". ($i+1);
//     }

// }
    





//***Exo 2 avec boucle for  !!! 
//    var_dump($a["19001"]);

//    for($i = 0; $i< count($a["19001"]);$i++)
//    {
//        if($a["19001"][$i] == "Stage" )
//        {
//              $mem= $i;
//        }
//    }
//    echo $mem;

// ***Exo 3 !! 
// $keys = array_keys($a);
// for($i=0;$i<=count($keys);$i++)
// {
//    if($keys == "19003")
//    {
//       $keys = array();
//    }


// }
// var_dump($keys);


//  *** Exo 4 !! 
//var_dump($a["19003"]);
// $tab= array();
// for($i=0;$i<count($a["19003"]);$i++)
// {
//     if($a["19003"][$i]=="Stage")
//     {
//        array_push($tab,$i);
//     }
    
// }
// echo count($tab);

// var_dump($a["19002"]);
//  echo $a["19002"][24];




?>