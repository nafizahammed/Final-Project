<?php 

if (isset($_REQUEST['submit'])){
	$data = '';
	$filename= 'data.json';
	if(is_file($filename)){
		$data = file_get_contents($filename);
	}

	$json_arr = json_decode($data,true);

	$json_arr[]= $arrayName = array('fullname' => $_REQUEST['fullname'] ,'username' => $_REQUEST['username'] ,'email' => $_REQUEST['email'] ,'password' => $_REQUEST['password'] ,);


	file_put_contents($filename, json_encode($json_arr));

	header("location: http://localhost/Project/registration.php");
}



 ?>