<?php

/*In PHP, there are three types of arrays:

    Indexed arrays - Arrays with a numeric index
    Associative arrays - Arrays with named keys
    Multidimensional arrays - Arrays containing one or more arrays
*/



$subjects= array("maths", "english","social" ); 
echo "I like " .$subjects[0]. ", " . $subjects[1] . "," .$subjects[2]. "<br><br>";


//Associative arrays - Arrays with named keys

$age = array("amit"=>"35", "vikash"=>"37", "kumar"=>"43");
echo "amit is " . $age['amit'] . " years old.<br>";
echo "vikash is " . $age['vikash'] . " years old.<br>";
echo "Kumar is " . $age['kumar'] . " years old.<br><br>";


//Multidimensional arrays - Arrays containing one or more arrays
$profit = array
  (
  array("maruti",20,18),
  array("dabur",18,13),
  array("zeel",5,2),
  array("nestle",17,21)
  );
  
echo $profit[0][0].": 2018: ".$profit[0][1]."%, 2019: ".$profit[0][2]."%.<br>";
echo $profit[1][0].": 2018: ".$profit[1][1]."%, 2019: ".$profit[1][2]."%.<br>";
echo $profit[2][0].": 2018: ".$profit[2][1]."%, 2019: ".$profit[2][2]."%.<br>";
echo $profit[3][0].": 2018: ".$profit[3][1]."%, 2019: ".$profit[3][2]."%.<br>";

?>