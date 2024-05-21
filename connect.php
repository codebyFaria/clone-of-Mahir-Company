<?php
		$servername="localhost";//127.0.0.1;
		$username	="root";
		$password	="";
		$database	="mahircompany";

	$conn	=mysqli_connect($servername,$username,$password,$database);

	if($conn){
		// echo"connection done";
	}

?>