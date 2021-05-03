<?php

include_once 'TimezoneCalculator.php';

use Html\TimezoneCalculator;

//Get date and time for Acre  time zone against CAT time
$calculate_time=new TimezoneCalculator('Brazil/Acre', date("h:i:sa"));

echo $calculate_time;
