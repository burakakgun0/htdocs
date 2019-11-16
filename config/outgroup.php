<?php 

include 'config.php';
include 'seo.php';

ob_start();

session_start();



	if (isset($_POST)) {
		$usId=$_SESSION['id'];
            $grupId=$_SESSION['groupid'];



            $sqlIns=$db->query("DELETE FROM `facegroup_users` WHERE user_id='$usId' and group_id='$grupId'");

            if ($sqlIns) {
            	echo 'Ok';
            } else {
            	echo "No";
            }
           	
            $_SESSION['groupid']='';

	}

?>