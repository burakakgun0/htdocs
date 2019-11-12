<?php 
ob_start();
session_start();
include 'config.php'; 

	
			$name=$_POST['name'];
            $lastname=$_POST['surname'];
			$pw=$_POST['pw'];
			$email=$_POST['email'];
            $erkekmi=$_POST['erkekmi'];
			$kadinmi=$_POST['kadinmi'];
			$phone=$_POST['phone'];
			$sehir=$_POST['sehir'];
         $sql="SELECT * FROM `user` WHERE email='$email'  or telefon='$phone'";

            $res=$db->query($sql);
			$cinsiyet;
	if($erkekmi)
	{
		$cinsiyet="E";
	}
	else{
		$cinsiyet="K";
	}


            $say=$res->rowCount();
		
	            if ($say>0) {

					echo "Hat";

							} 
				else 		{

				$insert="INSERT INTO `user`(`name`, `surname`, `password`, `email`, `telefon`,`cinsiyet`,`sehir`) VALUES ('$name','$lastname','$pw','$email','$phone','$cinsiyet','$sehir')";

                $resultt=$db->query($insert);

            		if($resultt)
					{
						      $sql="SELECT * FROM `user` WHERE email='$email'  or telefon='$phone'";
							  $res=$db->query($sql);
							  $userCek=$res->fetch(PDO::FETCH_ASSOC);
							 $_SESSION['id'] =$userCek['id'];
							 
								echo "Okey";
					}
					else
					{		
								echo "Hata";
					}
		/*				
	if($_SESSION['id']==$userCek['id']) {
			Header("Location:../newsfeed.php");
	}*/
							}
		



            



            

            	

            

            	



          







?>