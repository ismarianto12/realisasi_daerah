<?php
class Html_label
{
    public static function label($val, $for = false, $class = false, $title = false, $required = false)
    {
        $c = ($class == false ? '3' : $class);
        $r = ($required == false ? '' : "<span class='text-danger ml-1'>*</span>");
        return "<label for='".$for."' class='col-form-label s-12 col-md-".$c."' title='".$title."'>".$val.$r."</label>";
    }

    public static function value($val, $for = false, $class = false, $title = false)
    {
        $c = ($class == false ? '9' : $class);
        $c .= ' r-0 tl';
        return self::label($val, $for, $c, $title);
    }

}