<?php
require_once '../_app/base.php';
require_once '../_app/lib/mail_post.php';

class appHttpContactConfirm
{
    public static function addressDisp($post, $inputName)
    {
        $result = "";
        if (count($post[$inputName]) > 0) {
            foreach ($post[$inputName] as $index => $value) {
                if ($index === array_key_first($post[$inputName])) {
                    $result .=  $value . '<br>';
                } else {
                    $result .=  $value . '&nbsp;';
                }
            }
        }
        return $result;
    }
}
