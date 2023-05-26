<?php

if (!function_exists('activelink')) {
    function activeLink($urla)
    {
        $url = url()->current();
        $class = 'active_a';
        return $url == "http://blog.ru/ " . "$urla" ? $class : '';
    }
}


