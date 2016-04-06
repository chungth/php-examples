<h1>Try implode function for array </h1>
<ul>
	<li>Implode array</li>
	<li>Implode array after array_filter</li>
</ul>
<?php
 $array = array('1', '2','','3');
 echo 'we have an array: ';
 echo'<br/>';
 print_r($array);
 echo '<br/>';
 echo 'array without filter : '.implode(',',$array);
 echo '<br/>';
 echo 'array with filter: '.implode(',',array_filter($array));
