<?php
////side effects example
function spilitingName(string $name):array
{
    return explode(' ',$name);
}
$name = 'kavin kumar';
$newName = spilitingName($name);

//echo var_dump($name);
echo var_dump($newName);

/*
 * output:
 * array(2) { [0]=> string(5) "kavin" [1]=> string(5) "kumar" }
 */