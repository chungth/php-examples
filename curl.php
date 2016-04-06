<?php
function ssl_curl($url,$data = null) {

	$ch = curl_init($url);
	/* 
	echo "<pre>";
	print_r(curl_getinfo($ch));
	echo "</pre>"; */
	
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, FALSE);
	/**if need parameter*/
	if (isset($data)) {
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	}
	$pagedata = curl_exec($ch);
	curl_close($ch);

	return $pagedata;
}


var_dump(ssl_curl("http://php.net"));
