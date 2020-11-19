<?php
//If statements


$percentage= 75;

if ($percentage<33) {
   echo "You are fail";
}


//If-else statements


if ($percentage< 33) {
    echo "You are fail";
} else {
   echo "You are paas";
}


//if-else-elseif statements


if ($percentage< 33) {
   echo "You are fail";
} 
elseif ($percentage >33 && $percentage<60){
   echo "You are just paas";
} 
else {
   echo "You got dictation";
}


//switch statements


$press = 1;

switch ($press) {
    case 1:
        echo "Your want to talk about credit cards";
        break;
    case 2:
        echo "You want to talk about bank accounts";
        break;
    case 3:
        echo "You want to talk with customer care executive";
        break;
    default:
        echo "You didnot press any number so good bye.";
}
?> 