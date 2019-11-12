<?php 
ob_start();
session_start();
include 'config.php'; 



			$id=$_POST['id'];
            $pw=$_POST['pw'];
		
           $sql=$db->query("SELECT * FROM `user` WHERE email='$id' and password='$pw'");
			$userCek=$sql->fetch(PDO::FETCH_ASSOC);
			$rows=$sql->rowCount();
		
	            if ($rows>0) {

			
				$userId=$userCek['id'];
				
				$_SESSION['id']=$userId;
				//header("location:newsfeed.php");
				echo "Okey";

	            } else {

	            

            		echo "hata";

	            }




            



            

            	

            

            	



          







?>