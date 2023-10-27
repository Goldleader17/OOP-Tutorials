<?php

   class Weather {

    public static $tempConditions = ['cold', 'mild', 'warm'];

    public static function celciusToFahrenheit($c){
        return $c * 9 /5 + 32;
    }

    public static function determineTempCondition($f){
        if ($f < 40){
            return self::$tempConditions[0];
        } elseif($f < 70){
            return self::$tempConditions[1];
        } else {
            return self::$tempConditions[2];
        }
    }

   }

   //print_r(Weather::$tempConditions);
   //echo Weather::celciusToFahrenheit(20);
   echo Weather::determineTempCondition(50);

?>


<html lang="en">
<head>
    <title>PHP OOP Tutorial</title>
</head>
<body>
    
</body>
</html>
