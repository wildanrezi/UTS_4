<?php 

// WEB CONFIG
$WEB_CONFIG = [
	'app_name' => 'CRUD PHP MYSQL', 
	'base_url' => 'http://localhost/uts/'
];

//DATABASE CONFIG
$DB_CONFIG = [
	'host' => 'localhost',
	'user' => 'root',
	'passwd' => '',
	'db_name' => 'uts'
];		
$connect = mysqli_connect($DB_CONFIG['host'], $DB_CONFIG['user'], $DB_CONFIG['passwd'], $DB_CONFIG['db_name']);

// $koneksi = mysqli_connect("localhost","root","","uts");
	 
// 	// Check connection
// 	if (mysqli_connect_errno()){
// 		echo "Koneksi database gagal : " . mysqli_connect_error();
// 	}

?>