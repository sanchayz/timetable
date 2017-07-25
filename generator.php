<?php
/**
 * Created by PhpStorm.
 * User: sanch
 * Date: 25-07-2017
 * Time: 13:20
 */
$storeRandomNumber[5] = array();
//$professors = array("Seema", "Vaishali", "Reena", "Nasim", "Sejal");
$SEIT[4] = array();
$TEIT[4] = array();
$incrementer = 1;
//$selector = 1;
for($i=0; $i<=100; $i++) {

    //    srand(floor(time() / (60*60*24)));
    $selector = rand(0, 4);
    for($i=0;i<= count($storeRandomNumber); $i++)
    {
        if($storeRandomNumber[i] == $selector)
        {
            
        }
    }
    $storeRandomNumber[i] = $selector;
    echo $selector . "<br>";
//    $SEIT[$i] = $professors[$selector];
//    $TEIT[$i] = $professors[$selector - $incrementer];
}
//for($j= 0; $j <= count($SEIT) - 1; $j++)
//{
//    echo $SEIT[$j];
//    echo "<br>";
//}
//echo "<br> <br>";
//for($j= 0; $j <= count($TEIT) - 1; $j++)
//{
//    echo $TEIT[$j];
//    echo "<br>";}

