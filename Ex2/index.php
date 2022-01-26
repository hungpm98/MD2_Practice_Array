<?php
function createFloatArray($number)
{
    $array = [];
    for ($i = 0; $i < $number; $i++) {
        $array[] = rand(1, 100) / 10;

    }
    return $array;
}

$array1 = createFloatArray(10);
echo "<pre>";

print_r($array1);

function maxInArray($array)
{
    $max = $array[0];
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] > $max) {
            $max = $array[$i];
        }
    }
    return $max;

}
echo "Max in array is: ";
print_r(maxInArray($array1));


function minInArray($array)
{
    $min = $array[0];
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] < $min) {
            $min = $array[$i];
        }
    }
    return $min;

}

echo "<pre>";
echo "Min in array is: ";
print_r(minInArray($array1));