<?php
$arr = array(0,
            false,
            "string",
            null,
            array("res1","res2",array("resres1")),
        );
// print_r($arr); not good to print with an array have false, null value
print_r($arr);

print_r(array_count_values($arr));

echo count($arr);

echo count($arr, COUNT_RECURSIVE);

//count empty array
$arr = array();
echo count($arr);

//count in limit depth

function count_recursive($array, $limit)
{
    $count = 0;
    foreach ($array as $id => $_array) {
        if (is_array($_array) && $limit > 0) {
            $count += count_recursive($_array, $limit - 1);
        } else {
            $count += 1;
        }
    }

    return $count;
}

echo"1: ".count_recursive($arr, 0);
echo"2: ".count_recursive($arr, 1);
echo"3: ".count_recursive($arr, 2);
