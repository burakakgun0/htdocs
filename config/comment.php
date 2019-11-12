<?php 

include 'config.php';

ob_start();

session_start();
$usId=$_SESSION['id'];
$yorum=$_POST['comment'];
$id=$_POST['id'];



            $sql="INSERT INTO `post_comments`(`user_id`, `comment`, `post_id`) VALUES ('$usId','$yorum','$id')";

            $yorumat=$db->query($sql);

            	$sql = "SELECT `takenCommentCount` FROM `post` WHERE id='$id'";

	            $yorum=$db->query($sql);

	            $yorumCek=$yorum->fetch(PDO::FETCH_ASSOC);

	            $yorumSayi=$yorumCek['takenCommentCount'];

	            $yeniYorum= $yorumSayi+1;

            	$sql="UPDATE `post` SET `takenCommentCount`= '$yeniYorum' WHERE id='$id'";

            	$yorumGuncelle=$db->query($sql);



?>