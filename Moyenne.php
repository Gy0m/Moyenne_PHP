<?php
/**
 * Created by PhpStorm.
 * User: wilder2
 * Date: 19/09/16
 * Time: 14:46
 */
//$total = 0;
$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];
foreach ($students as $key => $value){
    echo $key. ' : ' .$value.' ans'. "<br/>";
}
$nombre = count($students);
$somme = array_sum($students);
$moyenne = $somme/$nombre;
    echo 'La moyenne est de :  ' .  $moyenne.'ans';



//Je laisse mes essais de code

//foreach ($students as $key => $value){
   // $total += $value;
   // echo $key.'=>'.$value;
   // $ex = explode(":", $value);
    //echo $ex[0];


?>
