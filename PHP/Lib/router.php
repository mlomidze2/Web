<?php

function router($uri, $arr = [])
{
    if ($uri == $_SERVER['REQUEST_URI'])
    {
        include './Controller/' . $arr[0];
        $fun = $arr[1];
        $fun();
    }
}