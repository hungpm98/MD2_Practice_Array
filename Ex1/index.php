<?php
function createArray($number)
{
    $array = [];
    for ($i = 0; $i < $number; $i++) {
        $array[] = rand(1, 100);
    }
    return $array;
}

$array = createArray(10);
echo "<pre>";
print_r($array);
function sortArray($array)
{
    for ($i = 0; $i < count($array); $i++) {
        $min = $array[$i];
        $index = $i;
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($min > $array[$j]) {
                $min = $array[$j];
                $index = $j;
            }
        }
        $temp = $array[$i];
        $array[$i] = $min;
        $array[$index] = $temp;
    }
    return $array;

}

$array = sortArray($array);
echo "<pre>";
print_r($array);
function removeDuplicateValue($array){
    $array1 = [];
    for ($i=0;$i<count($array);$i++){
        if(!in_array($array[$i],$array1)){
            $array1[] = $array[$i];
        }
    }
    return $array1;
}
$array = [1,2,3,1,1,2,4,5];
print_r(removeDuplicateValue($array));