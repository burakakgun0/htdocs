<?php 

include 'config.php';
include 'seo.php';

ob_start();

session_start();



	if (isset($_POST)) {
		$usId=$_SESSION['id'];
            $grupId=$_SESSION['groupid'];



            $sqlIns=$db->query("INSERT INTO `facegroup_users`(`group_id`, `user_id`) VALUES ('$grupId','$usId')");

            if ($sqlIns) {
            	echo 'Ok';
            } else {
            	echo "No";
            }
           	
            $_SESSION['groupid']='';

	}

?>