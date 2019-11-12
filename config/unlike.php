<?php 
include 'config.php';
ob_start();
session_start();
$usId=$_SESSION['id'];
$postId=$_POST['postId'];
$id=$_POST['userId'];

            	$sql = "SELECT `takenLikeCount` FROM `post` WHERE id='$postId'";

	            $yorum=$db->query($sql);

	            $yorumCek=$yorum->fetch(PDO::FETCH_ASSOC);

	            $yorumSayi=$yorumCek['takenLikeCount'];

	            $yeniYorum= $yorumSayi-1;



            	$sql="UPDATE `post` SET `takenLikeCount`= '$yeniYorum' WHERE id='$postId'";

            	$yorumGuncelle=$db->query($sql);



            	$sql="UPDATE `post_likes` SET `active`= 'H' WHERE post_id='$postId' and user_id='$id' and active='E'";

            	$yorumGuncelle=$db->query($sql);



          







?>