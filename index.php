<?php
$a=2;
$b=1;
if ($b<$a) {
    echo "vqrno<br>";
} else {
    echo "greshno<br>";
}

$myNumber=0;
if($myNumber == 2) {
    echo "<br>chisloto e 2";
} elseif($myNumber == 1) {
    echo "<br>chisloto e 1";
} 
else {
 echo "<br>chisloto e 0";
}

switch ($myNumber) {
    case $myNumber > 2:
        echo "<br>My number is greater than 2<br>";
        break;
    case $myNumber == 1:
        echo "<br>My number is equal to 1<br>";
        break;
    default:
        echo "<br>No match<br>";
        break;
}

function printMyName($myName){
    echo "<br>My name is ".$myName;

}

printMyName("Rado");
printMyName("penaaaa<br>");

function modifyMyName($myName){
    echo "<br>My name is ".$myName;
    $myName = "ivan";
    return $myName;
}

$myNewName = modifyMyName("Rado");
echo "<br>My new name is ".$myNewName;

