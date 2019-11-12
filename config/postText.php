<?php 
ob_start();
session_start();
include 'config.php'; 

			$id=$_SESSION['id'];

			


if (isset($_POST)) {

	
			$message=$_POST['text'];
			$link='abc';
			
			$up=$db->query("INSERT INTO `post`( `message`, `user_id`, `link`) VALUES ('$message','$id','$link')");
	            if ($up) {
	            	echo 'Okey';
	            }
	         

}









?>