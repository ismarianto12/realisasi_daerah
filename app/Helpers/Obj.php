<?php

namespace App\Helpers;
use App\Models\Obj_id;

class Obj
{

    public static function getNextObjId()
    {
        $d = date('d');
        $m = date('m');
        $y = date('y');
        $obj_id = Obj_id::firstOrCreate([
            'd' => $d,
            'm' => $m,
            'y' => $y
        ]);
        $no = $obj_id->no + 1;
        $obj_id->update(['no' => $no]);
        return '3674'.$y.$m.$d.$no;
    }
}
