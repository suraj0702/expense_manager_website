<?php

//1.  index array

$subject=array("math","english");
echo "i like ".$subject[0]." and ".$subject[1]."<br><br> ";

//2. associate array
$age=array("rohan"=>"35","suraj"=>"21","rajesh"=>"25");
echo "rohan is ".$age['rohan']." year old <br>   ";


//multidimensional array-array containing one and more array
$profit = array
(
array("maruti",21,20),
array("toyota",28,29),	
array("honda",24,22)	
);

echo "".$profit[0][0]." :2018:".$profit[0][1]." :2019:".$profit[0][2].".<br>";
echo "".$profit[1][0].": 2018: ".$profit[1][1]."%, 2019: ".$profit[1][2]."%.<br>";

?>