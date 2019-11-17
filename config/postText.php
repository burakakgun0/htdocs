<?php 
ob_start();
session_start();
include 'config.php'; 

			$id=$_SESSION['id'];

			


if (isset($_POST)) {

				$seed = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ'); 
			    shuffle($seed);
			    $hrand = '';
			    $hrand2 = '';
			    foreach (array_rand($seed, 5) as $k) $hrand .= $seed[$k];
			    foreach (array_rand($seed, 5) as $k) $hrand2 .= $seed[$k];
				$benzersizsayi4=rand(20000,32000);

			$message=$_POST['text'];
			$link=$hrand.$benzersizsayi4.$hrand2;

			if (isset($_POST['group'])) {
				$group=$_POST['group'];
			
			
			$up=$db->query("INSERT INTO `post`( `message`, `user_id`, `link`, `group_id`) VALUES ('$message','$id','$link','$group')");
	            if ($up) {
	            	echo 'Okey';
	            }
	         
	        } else {

	        	$up=$db->query("INSERT INTO `post`( `message`, `user_id`, `link`) VALUES ('$message','$id','$link')");
	            if ($up) {
	            	echo 'Okey';
	            }
	        }
}









?>