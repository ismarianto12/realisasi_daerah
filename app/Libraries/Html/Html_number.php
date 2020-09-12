<?php

namespace App\Libraries\Html;

class Html_number 
{
    public static function numeric($val)
    {
        if($val == null){ return 0;}
        return number_format($val, 0, ',', '.');
    }

    public static function decimal($val)
    {
        return number_format($val, 2, ',', '.');
    }
}