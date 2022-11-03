<?php
include "Speedometer.php";

echo "'10 Kms' is equal to '" . Speedometer::convertKmToMiles(10) . " Miles'<br>";
echo "'10 Miles' is equal to '" . Speedometer::convertMilesToKm(10) . " Kms'<br>";
