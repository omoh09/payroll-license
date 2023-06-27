<?php

namespace App\Helper;

class Helper
{
    public function app_id_generator()
    {
        $timestamp = time();
        $randomNumber = mt_rand(10000, 99999); // Generate a random number between 1000 and 9999
        $uniqueNumber = "AV_" . $timestamp . $randomNumber;
        return $uniqueNumber;
    } 
}