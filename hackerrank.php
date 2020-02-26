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

    function birthdayCakeCandles($ar) {
        rsort($ar);
        $sum = 0;
        $i = 0;
        while(($i <= sizeof($ar)) && ($ar[0] == $ar[$i])){
            $sum +=1;
            $i +=1;
        }
        return $sum;


    }
}