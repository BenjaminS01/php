

<?php

$BMI = 0.0;


#                                                   "body height" in meter   "body weight" in kilogram          
$person = array("name" => "xyz", "first name" => "abc", "body height" => 1.74, "body weight" => 70.0);

$BMI = $person["body weight"] / ($person["body height"] ** 2 );

echo "name: " . $person["name"] . ", first name: ".$person["first name"] . ", body height: " . $person["body height"] 
 . " meter" . ", body weight: " . $person["body weight"] . "kg" . ", BMI: " . $BMI;



?>