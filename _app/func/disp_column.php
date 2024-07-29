<?php
class appFuncDisp_column
{
    public function __construct()
    {
    }

    /*一覧表示*/
    public static function list($data, $tmpl, $int = null)
    {
        $count = 0;
        foreach ($data as $value) {
            if ($int == null || $count <= $int) {
                include $tmpl;
                $count += 1;
            } else {
                break;
            }
        }
    }
}
