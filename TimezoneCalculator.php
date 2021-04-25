<?php
namespace Html;                                                                                                                                                                                                             use DateInterval;
use DateTime;
use DateTimeZone;

class TimezoneCalculator{

    protected $TimeDate;

    public function __construct($TimeZoneSelected, $CATDateTime)
    {


        $userTimezone=$this->userTimezone($TimeZoneSelected);
        try {
            $myDateTime = new DateTime($CATDateTime, $this->CAT_TIME_ZONE());
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


