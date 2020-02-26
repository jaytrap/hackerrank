<?php


class HackerRank
{

    public function minMaxSum($arr){
        rsort($arr);
        $maxVal= 0;
        $minVal = 0;
        for ($x = 0 ; $x < sizeof($arr)-1; $x++)
        {
            $maxVal += $arr[$x];
        }

        for($x = sizeof($arr)-1; $x > 0 ; $x--){
            $minVal += $arr[$x];
        }
        $sum=$minVal." ".$maxVal;
        return $sum;
    }

    public function birthdayCakeCandles($ar) {
        rsort($ar);
        $sum = 0;
        $i = 0;
        while(($i <= sizeof($ar)) && ($ar[0] == $ar[$i])){
            $sum +=1;
            $i +=1;
        }
        return $sum;
    }
// the warmap challenge
    public function timeConversion($s) {

        $timeArray  = explode(":", $s);

        $period = substr($timeArray[2],2);
        $hour = $timeArray[0];
        if($period == "PM" && $hour != 12){
            $hour += 12;
        }elseif($period == "AM" && $hour == 12){
            $hour = "00";
        }


        $time = $hour.":".$timeArray[1].":".substr($timeArray[2],0,2);

        return $time;

    }
}