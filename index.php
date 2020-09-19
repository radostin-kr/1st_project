<?php
echo "как е пена";
$username = "<br>Rado<br>";
echo $username;
$age = 22;
echo $age;
$bool = true;
echo $bool;


$array = ["<br>cherveno<br>", 44];
echo $array[0];
echo $array[1];
$assocarray = ["username"=>"<br>petko<br>", "age"=>"33"];
echo $assocarray["username"];


for ($i = 0; $i<2; $i++) {
echo $array[$i];
}

foreach($assocarray as $currentelement) {
    echo $currentelement;
}
