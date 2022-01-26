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

function evenMax($array)
{
    $max = $array[0];
    for ($i = 0; $i < count($array); $i++) {
        if ((int)$array[$i] % 2 == 0) {
            if ($array[$i] > $max) {
                $max = $array[$i];
            }
        }
    }
    return (int)$max;
}

echo "<pre>";
echo "EvenMax in array is: ";
print_r(evenMax($array1));


function oddMin($array)
{
    $min = $array[0];
    for ($i = 0; $i < count($array); $i++) {
        if ((int)$array[$i] % 2 != 0) {
            if ($array[$i] < $min) {
                $min = $array[$i];
            }
        }
    }
    return (int)$min;
}

echo "<pre>";
echo "oddMin in array is: ";
print_r(oddMin($array1));

function sumArray($array){
    $sum = 0;
    for ($i=0;$i<count($array);$i++){
     $sum += $array[$i];
    }
    return $sum;
}
echo "<pre>";
echo "Sum array is: ";
print_r(sumArray($array1));

function perfectSquare($array){
    $array1 = [];
    for ($i=0;$i<count($array);$i++){
            $j=0;
            while ($j*$j<=$array[$i]){
                if ($j*$j==$array[$i]){
                    $array1[] = $array[$i];
                }
                $j ++;
            }

    }
    return $array1;
}
echo "<pre>";
echo "PerfectSquare is: ";
print_r(perfectSquare($array1));

function avgArray($array){
    for ($i=0;$i<count($array);$i++){
            return sumArray($array)/count($array);
    }
}
echo "<pre>";
echo "Avg Array is: ";
print_r(avgArray($array1));

function greaterAvgArray($array){
    $array1 = [];
    for ($i=0;$i<count($array);$i++){
     if($array[$i]>avgArray($array)){
         $array1 [] = $array[$i];
     }
    }
    return $array1;
}
echo "<pre>";
echo " Greater Than Avg Array is: ";
print_r(greaterAvgArray($array1));

function sortArrayUp($array){
    for ($i=0;$i<count($array);$i++)
        for($j=0;$j<count($array)-$i-1;$j++){
            if($array[$j]>$array[$j+1]){
                $temp = $array[$j+1];
                $array [$j+1] = $array [$j];
                $array[$j] = $temp;
            }


    }
    return $array;
}
echo "<pre>";
echo " Sort Array Up: ";
print_r(sortArrayUp($array1));
function sortArrayDown($array){
    for ($i=0;$i<count($array);$i++)
        for($j=0;$j<count($array)-$i-1;$j++){
            if($array[$j]<$array[$j+1]){
                $temp = $array[$j+1];
                $array [$j+1] = $array [$j];
                $array[$j] = $temp;
            }


        }
    return $array;
}
echo "<pre>";
echo " Sort Array Down: ";
print_r(sortArrayDown($array1));