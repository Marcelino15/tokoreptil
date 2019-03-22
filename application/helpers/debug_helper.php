<?php

/**
 * @param $array
 */
function dump($array = null)
{
    print '<pre>';
    print_r($array);
    print '</pre>';
}

/**
 * @param $array
 */
function dump_exit($array = null)
{
    print '<pre>';
    print_r($array);
    print '</pre>';
    exit();
}
