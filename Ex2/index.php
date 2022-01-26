<?php
function createFloatArray($number)
{
    $array = [];
    for ($i = 0; $i < $number; $i++) {
        $array[] = rand(1, 100) / 10;

    }
    return $array;
}

echo "<pre>";
print_r(createFloatArray(10));