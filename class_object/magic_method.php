<?php
class CodingTip{
	private $url;
	public  $name;
	
	function __get($name){
		echo "getting {$name}";
		
	}
	function __set($name,$val){
		if (property_exists(get_class($this), $name)) {
			echo "setting {$name} = {$val}";
			$this->$name = $val;
		}
		else{
			echo " ${name} property does not exists";
		}
		
	}
	
}
$ct = new CodingTip();
$ct->url = 3;
echo "<br/>";
$ct->url;
echo "<br/>";
$ct->name = "Codingtip";
echo "<br/>";
$ct->notProperties = 5;
echo "<pre>";
echo print_r($ct);
echo "</pre>";
var_dump(get_class_vars(get_class($ct)));

var_dump(get_object_vars($ct));
