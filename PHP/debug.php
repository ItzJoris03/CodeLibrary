<?php
/*
 * This code belongs to the debug function,
 * Just delete the import when you don't need
 * this function anymore
 */

const DEBUG_ALL = 1;
const DEBUG_SIMPLE = 0;

function debug(mixed $variable, int $type = DEBUG_ALL) : void {
    echo "<pre>";
    ($type === DEBUG_SIMPLE) ? print_r($variable) : var_dump($variable) ;
    echo "</pre>";
}

echo "test";