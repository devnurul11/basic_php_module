<?php
function strFunc($str) {
    if (strlen($str) == 0) {
        return "";
    } else {
        return strFunc(substr($str, 1)) . substr($str, 0, 1);
    }
}
        echo strFunc("hello");