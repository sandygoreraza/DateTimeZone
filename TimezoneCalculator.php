<?php

class TimezoneCalculator{

protected $TimeDate;

public function __construct($TimeZoneSelected,$CATdatetime)
{

  
    $userTimezone=$this->userTimezone($TimeZoneSelected);
    try {
        $myDateTime = new DateTime($CATdatetime, $this->CAT_TIME_ZONE());
    } catch (Exception $e) {

   $myDateTime=null;
    }

    $offset = $userTimezone->getOffset($myDateTime);
    $myInterval=DateInterval::createFromDateString((string)$offset . 'seconds');
    $myDateTime->add($myInterval);
$this->TimeDate=$myDateTime->format('Y-m-d H:i:s');

    return  $this->TimeDate;


}

private function CAT_TIME_ZONE(){
    return new DateTimeZone('CAT');
}

    private function userTimezone($timezone){

        return new DateTimeZone($timezone);

    }

    public function __toString()
    {
        return $this->TimeDate;
    }


}

//Get date and time for Los angeles time zone against CAT time
$calculate_time=new TimezoneCalculator('America/Los_Angeles','2021-04-24 10:14');

echo $calculate_time;
