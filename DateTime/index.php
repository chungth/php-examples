<?php
include('DateTimeFormatter.php');
?>
<html>
<head>
<title> DateTime Formatter experimental</title>
</head>
<body>
<h1> DateTime Formatter exprimental</h1>
<h2>1.convert from UNIX timestamp</h2>
<?php 
	echo DateTimeFormatter::convert('1377442800','U','Y-m-d H:m:i');
	echo "<br/>";
	echo DateTimeFormatter::convert('1377442800','U','Y-m-d H:m');
?>

</body>
</html>