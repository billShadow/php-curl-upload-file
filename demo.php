<?php
function upload_file($url,$filename,$path,$type){
	$data = array('userfile'=>new CURLFile(realpath($path)));
	$ch = curl_init();
	
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true );
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$return_data = curl_exec($ch);
	curl_close($ch);
	echo $return_data; 
}

upload_file("http://api.aldwx.com/main/action/Macdonald/Macdonald/receiver_upload_file",'a.log','./a.log','text');
