<h1> Count all elements in an array, or something in an object</h1>
<p> We have an array:
<pre>
<?php
$arr = array(0,
			false, 
			"string",
			null,
			array("res1","res2",array("resres1"))
		);
// print_r($arr); not good to print with an array have false, null value
print_r($arr);
?>
</pre>
<pre>
<?php
print_r(array_count_values($arr));
?>
</pre>
<p>Normal count</p>
<?php 
echo count($arr);

?>
<p> count  COUNT_RECURSIVE</p>
<?php 
echo count($arr, COUNT_RECURSIVE);
?>
<p> count  undefine variable </p>
<?php 
echo count($arr);
echo "<br/> check if array is seted: ";
if(isset($arr))
	echo  "setted";
else echo "not yet";
?>
<p> count a variable that has been initialized with an empty array</p>
<?php
$arr = array();
echo count($arr);
?>


<p>count in limit depth</p>
<?php 
function count_recursive ($array, $limit) { 
    $count = 0; 
    foreach ($array as $id => $_array) { 
        if (is_array ($_array) && $limit > 0) { 
            $count += count_recursive ($_array, $limit - 1); 
        } else { 
            $count += 1; 
        } 
    } 
    return $count; 
} 
?>
<?php 
 echo"1: ".count_recursive($arr,0);
 echo"2: ".count_recursive($arr,1);
 echo"3: ".count_recursive($arr,2);
 
unset($arr[0]);
echo "<pre>";
var_dump($arr);
echo "</pre>";
echo count($arr);

?>