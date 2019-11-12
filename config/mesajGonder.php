<?php 
ob_start();
session_start();
include 'config.php'; 

	
		
			$alici=$_POST['userId'];
			$mesaj=$_POST['mesaj'];
			$userId=$_SESSION['id'];
           
		
				$insert="INSERT INTO `dm`( `chat_user_id`, `chat_usertwo_id`, `message`) VALUES ('$userId','$alici','$mesaj')";

                $resultt=$db->query($insert);

            		if($resultt)
					{
								echo "Okey";
					}
					else
					{		
								echo "Hata";
					}



				
            



            

            	

            

            	



          







?>