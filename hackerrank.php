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
        for($x = 0; $x< sizeof($ar)-1; $x++){
            if($ar[0] == $ar[$x]){
                $sum +=1;
            }
        }
        return $sum;

    }
}