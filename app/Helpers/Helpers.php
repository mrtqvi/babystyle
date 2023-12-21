<?php

use Illuminate\Support\Carbon;

if (!function_exists('getJalaliTime')) {
    function getJalaliTime($date, $format = "H:i:s - Y/m/d")
    {
        $jdate = new Verta($date);
        return $jdate->format($format);
    }
}

if (!function_exists('dateFormating')) {
    function dateFormating($value)
    {
        $value = substr($value, 0, 10);
        return date("Y-m-d H:i:s", (int) $value);
    }
}

if (!function_exists('formatPhoneNumber')) {
    function formatPhoneNumber($phoneNumber)  {
        $phoneNumber = ltrim($phoneNumber, '0');
        $phoneNumber = substr($phoneNumber, 0, 2) === '98' ? substr($phoneNumber, 2) : $phoneNumber;
        $phoneNumber = str_replace('+98', '', $phoneNumber);
        return $phoneNumber;
    } 
}


if (!function_exists('dateSubtration')) {
    function dateSubtration($endDate, $startDate){
        return Carbon::parse($endDate)->diffInSeconds($startDate);
    }
}