<?php
    header("Content-type: text/css; charset: UTF-8");



	$input = array("dark", "light", "");
	$rand_keys = array_rand($input, 2);

	$scheme = $input[$rand_keys[0]];
	

if ($scheme == "dark") {
	
	$darkBg = array("#212a34", "#383838", "#000");
	$rand_keys_1 = array_rand($input, 2);

	$bg_colour = $darkBg[$rand_keys_1[0]];
	
	echo 'body {background-color:' . "$bg_colour" . '}';
	echo 'h2 { color:#fff;';
    
    }
    
elseif ($scheme == "light") {
	
	$lightBg = array("#ebecee", "#31a989", "#fff");
	$rand_keys_2 = array_rand($input, 2);

	$bg_colour = $lightBg[$rand_keys_2[0]];
	
	echo 'body {background-color:' . "$bg_colour" . '}';
	echo 'h2 { color:#000;';
    
    }
    
else { echo 'body {background-color: #ef3c39;}'; }
    
   

?>