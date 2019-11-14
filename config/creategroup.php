<?php 

include 'config.php';
include 'seo.php';

ob_start();

session_start();
$usId=$_SESSION['id'];


	if (isset($_POST)) {
		$name=$_POST['name'];
		$description=$_POST['description'];
		$path='images/users/groupavatardefault.jpg';
		$bg_path='images/covers/1.jpg';
		$seo=seo($_POST['name']);
            $sql=$db->query("INSERT INTO `facegroup`(`name`, `description`, `path`, `bg_path`, `owner_user_id`, `seo`) VALUES ('$name','$description','$path','$bg_path','$usId','$seo')");

            $sel=$db->query("SELECT * FROM `facegroup` WHERE owner_user_id='$usId' order by id DESC limit 1");
            $select=$sel->fetch(PDO::FETCH_ASSOC);
            $groupId=$select['id'];

            $sqlIns=$db->query("INSERT INTO `facegroup_users`(`group_id`, `user_id`) VALUES ('$groupId','$usId')");

            if ($sqlIns) {
            	echo $seo;
            } else {
            	echo "No";
            }
           	
            

	}

?>