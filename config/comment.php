<?php 

include 'config.php';

ob_start();

session_start();
$usId=$_SESSION['id'];
$yorum=$_POST['comment'];
$id=$_POST['id'];

$mesaj= "Yorum Attı   " . $yorum;

				
            $sqlc = "SELECT * FROM `post` WHERE id='$id'";
	            $pos=$db->query($sqlc);
	            $posCek=$pos->fetch(PDO::FETCH_ASSOC);
	            $posUserId=$posCek['user_id'];
	      


				$sql="INSERT INTO `post_comments`(`user_id`, `comment`, `post_id`) VALUES ('$usId','$yorum','$id')";
			
					
	            	$sqll="INSERT INTO `notification`(`olusturan_user_id`,`etkilenen_user_id`,`message`,`post_id`) VALUES ('$usId','$posUserId','$mesaj','$id')";


	            	$bildirimOlustur=$db->query($sqll);
					

            $yorumat=$db->query($sql);

            	$sql = "SELECT `takenCommentCount` FROM `post` WHERE id='$id'";

	            $yorum=$db->query($sql);

	            $yorumCek=$yorum->fetch(PDO::FETCH_ASSOC);

	            $yorumSayi=$yorumCek['takenCommentCount'];

	            $yeniYorum= $yorumSayi+1;

            	$sql="UPDATE `post` SET `takenCommentCount`= '$yeniYorum' WHERE id='$id'";

            	$yorumGuncelle=$db->query($sql);



?>