<?php 
class CodingTip{
	 public $url;
	 private $postNums;
	 protected  $title;
	 public $nullProperty;
	 static $staticProperty;
	 function __construct(){
	 	$this->url = "http://codingtip.blogspot.com";
	 	$this->postNums = 100;
	 	$this->title = "just for sharing";
	 }
	 
	 public function method1($param = 1){
	 	 switch ($param){
	 	 	case 1:
	 	 		return get_object_vars($this);
	 	 	case 2:
	 	 		return $this->method2();
	 	 	case 3:
	 	 		return $this->method3();
	 	 }
	 	 
	 }
	 protected function method2(){
	 	return get_class_methods(get_class($this));
	 }
	 private function method3(){
	 	return get_class_vars(get_class($this));
	 }
}

$ct = new CodingTip();

echo "<pre>";
print_r(get_object_vars($ct));
echo "</pre>";

echo "<pre>";
print_r(get_class_methods(get_class($ct)));
echo "</pre>";

echo "<pre>";
print_r($ct->method1());
echo "</pre>";

echo "<pre>";
print_r($ct->method1(2));
echo "</pre>";

echo "<pre>";
print_r($ct->method1(3));
echo "</pre>";

?>