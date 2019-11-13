<?php 
include 'config.php';
ob_start();
session_start();

$id=$_SESSION['id'];

$asd=array();

				$sqlc = "SELECT * FROM `notification` WHERE `etkilenen_user_id`='$id' and `okundumu`=0";
	            $pos=$db->query($sqlc);
	            $posCek=$pos->fetch(PDO::FETCH_ASSOC);
				$bildirimSayi=$pos->rowCount();
				
				
				
				
				$sqla = "SELECT * FROM `dm` WHERE `chat_usertwo_id`='$id' and 'okundumu'=0";
	            $poss=$db->query($sqla);
	            $posCekk=$poss->fetch(PDO::FETCH_ASSOC);
				$mesajSayi=$poss->rowCount();
				
					$value = array( 
						"mesaj"=>$mesajSayi,
						"bildirim"=>$bildirimSayi						
						); 
   
									
					
				array_push($asd,$value);



	
		$json = json_encode($asd); 
						
			echo $json ;

?>