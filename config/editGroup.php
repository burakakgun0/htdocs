<?php 
ob_start();
session_start();
include 'config.php'; include 'seo.php'; 



		if (isset($_POST['desc'])) {


			
			$id=$_POST['seo'];
			$_SESSION['seo']=$id;
			$desc=$_POST['desc'];
			$face=$db->prepare("UPDATE `facegroup` SET `description`='$desc' WHERE id='$id'")->execute();

		}





?>