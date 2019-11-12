<?php 
ob_start();
session_start();
include 'config.php'; 

			$id=$_SESSION['id'];

			if (isset($_POST['email'])) {
			$name=$_POST['name'];
            $lastname=$_POST['surname'];
            $acc=$_POST['acc'];
			$email=$_POST['email'];
            $erkekmi=$_POST['erkekmi'];
			$kadinmi=$_POST['kadinmi'];
			$phone=$_POST['phone'];
			$sehir=$_POST['sehir'];
         	$stringg=$_POST['profile_string'];
			$cinsiyet;
	if($erkekmi)
	{
		$cinsiyet="E";
	}
	else{
		$cinsiyet="K";
	}


           
			$up=$db->query("UPDATE `user` SET `name`='$name',`profile_string`='$stringg',`surname`='$lastname',`username`='$acc',`email`='$email',`telefon`='$phone',`sehir`='$sehir',`cinsiyet`='$cinsiyet' WHERE id='$id'");
	            if ($up) {
	            	echo 'Okey';
	            }
				
				}





if (isset($_POST['company'])) {

			$company=$_POST['company'];
            $desgn=$_POST['designation'];
            $date=$_POST['fromdate'];
			
			$up=$db->query("UPDATE `user` SET `sirket`='$company',`brans`='$desgn',`whatTime`='$date' WHERE id='$id'");
	            if ($up) {
	            	echo 'Okey';
	            }

}


if (isset($_POST['ilgi'])) {

			$ilgi=$_POST['ilgi'];
			
			$up=$db->query("UPDATE `user` SET `ilgiler`='$ilgi' WHERE id='$id'");
	            if ($up) {
	            	echo 'Okey';
	            }

}


if (isset($_POST['oldpw'])) {

			$oldpw=$_POST['oldpw'];
			$pw1=$_POST['pw1'];
			$pw2=$_POST['pw2'];

			if ($pw1==$pw2) {

				$sql=$db->query("SELECT * FROM `user` WHERE password='$oldpw' and id='$id'");
				$say=$sql->rowCount();

				if($say!=0) {
					$up=$db->query("UPDATE `user` SET `password`='$pw1' WHERE id='$id'");
	           		 if ($up) {
	            	echo 'Okey';
	           		 }

				} else {
					echo 'No';
				}
				
				


			}
			
			

}

            

            	
if (isset($_POST['bildirimler'])) {
			$takip;
            $bildirimler;
            $mesajlar;
			$etiket;
            $bildirimSes;
			
	if($_POST['takip']=='true')
	{
		$takip="E";
	}
	else{
		$takip="H";
	}
	if($_POST['bildirimler']=='true')
	{
		$bildirimler="E";
	}
	else{
		$bildirimler="H";
	}
	if($_POST['mesajlar']=='true')
	{
		$mesajlar="E";
	}
	else{
		$mesajlar="H";
	}
	if($_POST['etiket']=='true')
	{
		$etiket="E";
	}
	else{
		$etiket="H";
	}
	if($_POST['bildirimSes']=='true')
	{
		$bildirimSes="E";
	}
	else{
		$bildirimSes="H";
	}


           
			$up=$db->query("UPDATE `user` SET `takip`='$takip',`bildirimler`='$bildirimler',`mesajlar`='$mesajlar',`etiket`='$etiket',`bildirimSes`='$bildirimSes' WHERE id='$id'");
	            if ($up) {
	            	echo 'Okey';
	            }
				
}
            

            	



          







?>