<?php
class appFuncChatbot
{
    public static $currentId = '1';
    public static $prevId = '1';
    public static $body = '';
    public static $dispFlag = 0;

    private static function prevId($getId): string
    {
        $result = '';
        $separationStr = '_';
        $array = explode($separationStr, $getId);
        $arrayCount = count($array);
        $count = 0;
        foreach ($array as $value) {
            $result .= $value;
            if ($count == $arrayCount - 2) {
                break;
            } else {
                $result .= $separationStr;
                $count += 1;
            }
        }
        return $result;
    }

    public static function disp($data, $getId, $includeFile)
    {
        $currentId = $getId;
        $title = null;
        $body = null;
        $menu = array();
        $menuCount = 0;
        $prevId = self::prevId($getId);
        $tmpl = 'default';
        if (isset($data[$getId]['title'])) {
            $title = $data[$getId]['title'];
        }
        if (isset(chatbot::data[$currentId]['str'])) {
            $body = $data[$currentId]['str'];
        }
        if (isset($data[$currentId]['select'])) {
            $menu = $data[$currentId]['select'];
            $menuCount = count($menu);
        }
        if (isset($data[$getId]['tmpl'])) {
            $tmpl = $data[$getId]['tmpl'];
        }
        include $includeFile;
    }
}
