<?php 

include 'config.php';

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

            echo "Okey";

}
?>