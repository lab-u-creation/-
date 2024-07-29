<?php
require_once '../_app/http/chatbot/index.php';

foreach (chatbot::data as $key => $value) {
    echo '【' . $key . '】';
    if (isset($value['title'])) {
        echo $value['title'].'<br>';
    }
    if (isset($value['str'])) {
        echo $value['str'].'<br>';
    }
    if (isset($value['select'])) {
        echo '選択肢：'.'<br>';
        foreach ($value['select'] as $value2) {
            echo $value2 . '/';
        }
    }
    echo '<hr>';
}
