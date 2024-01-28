<?php

$vehicleOwner = "Oscar";
$vehicleType = "Camaro 🚗";

echo "{$vehicleOwner} is the owner of the {$vehicleType}. <br/><br/>";

//

$partyTime = "<br/>I wanna rock! 🎈";
$secondOnChain = "partyTime";

echo $secondOnChain;
echo $$secondOnChain;

//

//Dynamic Typing
$onlyString = "Just a string";
$onlyString = 1;

echo $onlyString;
