<?php

class Speedometer
{
    public const KM_TO_MILES = 0.621371;

    public static function convertKmToMiles(int $km)
    {
        return $km * self::KM_TO_MILES;
    }

    public static function convertMilesToKm(int $miles)
    {
        return $miles / self::KM_TO_MILES;
    }
}
