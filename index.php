<?php

include_once 'TimezoneCalculator.php';

use Html\TimezoneCalculator;

//Get date and time for Acre  time zone against CAT time
$calculate_time=new TimezoneCalculator('Brazil/Acre','2021-04-24 10:14');

echo $calculate_time;
