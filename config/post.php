<?php 
ob_start();
session_start();
include 'config.php'; 

			$id=$_SESSION['id'];

			

echo 'Okey';
if (isset($_POST)) {

	$uploads_dir = '../dimg/post';
    @$tmp_name = $_FILES['file']["tmp_name"];
    @$name = $_FILES['file']["name"];
    $benzersizsayi1=rand(20000,32000);
    $benzersizsayi2=rand(20000,32000);
    $benzersizsayi3=rand(20000,32000);
    $benzersizsayi4=rand(20000,32000);

    $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
    $refimgyol=substr($uploads_dir, 3)."/".$benzersizad.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

			
			$format=explode('.',$refimgyol);
			$formatt=$format[1];

			if ($formatt=='png' || $formatt=='jpg' || $formatt=='bmp') {
				$formatt='jpeg';
			}
		
			$sel=$db->query("SELECT * FROM `post` WHERE user_id='$id' order by id DESC limit 1");
			$selectt=$sel->fetch(PDO::FETCH_ASSOC);
			$postId=$selectt['id'];
			$ins=$db->query("INSERT INTO `post_detail`( `post_id`, `path`,`mime`) VALUES ('$postId','$refimgyol','$formatt')");


}









?>