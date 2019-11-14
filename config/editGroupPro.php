<?php 
ob_start();
session_start();
include 'config.php'; 

			$id=$_SESSION['id'];

			$grupId=$_SESSION['seo'];



if (isset($_POST)) {

	$uploads_dir = '../dimg/group/profile';
    @$tmp_name = $_FILES['file']["tmp_name"];
    @$name = $_FILES['file']["name"];
    $benzersizsayi1=rand(20000,32000);
    $benzersizsayi2=rand(20000,32000);
    $benzersizsayi3=rand(20000,32000);
    $benzersizsayi4=rand(20000,32000);

    $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
    $refimgyol=substr($uploads_dir, 3)."/".$benzersizad.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

			
			$face=$db->prepare("UPDATE `facegroup` SET `path`='$refimgyol' WHERE id='$grupId'")->execute();


}









?>