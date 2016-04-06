<?php
const Mac = 0;
$os = array("NT", "Irix", "Linux",Mac);

echo"<p>Declared: <br/>";
echo '
const Mac = 0; <br/>
$os = array("NT", "Irix", "Linux",Mac);';
echo "</p>";

echo "our array <br/>";
echo "<p>".var_dump($os)."</p>";
echo "<p> try to search 'Mac' :  ";
if (in_array("Mac", $os)) {
	echo "Got Mac";
}
echo "</p>";

echo "<p> try to search 'mac': ";

if (in_array("mac", $os)) {
	echo "Got mac";
}
else 
	echo "do not got any 'mac'";
echo "</p>";

echo '<p> === try in_array with $strict= true ===</p>';
echo 'try to search "Mac":   ';
if(in_array("Mac", $os, true)){
	echo "got 'Mac'";
}
else 
	echo "do not got any 'Mac'";
?>
