<?php 
include 'config.php';
ob_start();
session_start();

        $usId=$_SESSION['id'];
        $postId=$_POST['postId'];
        $id=$_POST['userId'];

            $sql = "SELECT * FROM `post_likes` WHERE user_id='$usId' and post_id='$postId' and active='H'";
	            $yorum=$db->query($sql);
	            $LikeCek=$yorum->fetch(PDO::FETCH_ASSOC);
	            $likeId=$LikeCek['id'];
	            $rows=$yorum->rowCount();

	            if ($rows>0) {

	            	$sql="UPDATE `post_likes` SET `active`= 'E' WHERE id='$likeId'";

            		$yorumat=$db->query($sql);

	            } else {

	            	$sql="INSERT INTO `post_likes`(`user_id`, `post_id`) VALUES ('$usId','$postId')";

            		$yorumat=$db->query($sql);
					
					 $sqlc = "SELECT * FROM `post` WHERE id='$id'";
					$pos=$db->query($sqlc);
					$posCek=$pos->fetch(PDO::FETCH_ASSOC);
					$posUserId=$posCek['user_id'];
	      
					
					
					
	            	$sqll="INSERT INTO `notification`(`olusturan_user_id`,`etkilenen_user_id`,`message`,`post_id`) VALUES ('$usId','$posUserId','Paylaşımınızı Beğendi','$postId')";


	            	$bildirimOlustur=$db->query($sqll);
					

	            }


	            if ($yorumat) {

            		$sql = "SELECT `takenLikeCount` FROM `post` WHERE id='$postId'";

	            $yorum=$db->query($sql);

	            $yorumCek=$yorum->fetch(PDO::FETCH_ASSOC);

	            $yorumSayi=$yorumCek['takenLikeCount'];

	            $yeniYorum= $yorumSayi+1;

            	$sql="UPDATE `post` SET `takenLikeCount`= '$yeniYorum' WHERE id='$postId'";

            	$yorumGuncelle=$db->query($sql);



            	echo json_encode($cevap['status']= 'true');





            	} else {



            		echo json_encode($cevap['status'] = 'false');

            	}

            



            

            	

            

            	



          







?>