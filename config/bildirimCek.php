<?php 
include 'config.php';
ob_start();
session_start();

$id=$_SESSION['id'];

$asd=array();

				$sqlc = "SELECT * FROM `notification` WHERE `etkilenen_user_id`='$id' and `okundumu`=0 order by id desc";
	            $pos=$db->query($sqlc);
	         
				
			 
					  if ($pos->rowCount() > 0) {
							$i=0;	
					// output data of each row
					while($posCek = $pos->fetch(PDO::FETCH_ASSOC)) {		
					
					$b=$posCek['id'];
					$sqll="UPDATE `notification` SET `okundumu`=? WHERE id='$b'";
					$stmt= $db->prepare($sqll);
						$a=1;
						$stmt->execute([$a]);
					
						$sqla = "SELECT * FROM `user` WHERE `id`='$id'";
						$postt=$db->query($sqla);
						$userC = $postt->fetch(PDO::FETCH_ASSOC);
						$value = array( 
						"name"=>$userC['name'],
						"surname"=>$userC['surname'],
						"message"=>$posCek['message'],
						"postId"=>$posCek['post_id']	
						); 
					
							array_push($asd,$value);
						
		
					}
		
		
				
				
			   }
				
			$json = json_encode($asd); 
						
			echo $json ;

?>