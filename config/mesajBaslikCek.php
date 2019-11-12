<?php 
ob_start();
session_start();
include 'config.php'; 


$asd=array();

$userId=$_SESSION['id'];
			$sql=$db->query("select chat_user_id ,chat_usertwo_id from dm where chat_user_id='$userId' or chat_usertwo_id='$userId' group by chat_user_id ,chat_usertwo_id" );
			
				$rows=$sql->rowCount();

		
		
			 $mesajlasilanArr=array();
			$abc="";
			  if ($rows > 0) {
							$i=0;
					// output data of each row
					while($row = $sql->fetch(PDO::FETCH_ASSOC)) {		
					
						$abc=$row["chat_user_id"];	
						if($abc!=$userId)
						{
							$mesajlasilanArr[$i]=$abc;
							$i++;
							//echo $abc;
						}
						
						$abc=$row["chat_usertwo_id"];	
							if($abc!=$userId)
						{
							$mesajlasilanArr[$i]=$abc;
							$i++;
							//echo $abc;
						}	
					}
		
		
				
				
			   }
			$j=0;
			$k=0;
			
			   $total = count ($mesajlasilanArr);
			   
			for($j=0;$j<$total;$j++)
			{
				
				for($k=$j+1;$k<$total;$k++)
				{
					if($mesajlasilanArr[$k]==$mesajlasilanArr[$j])
					{
						$mesajlasilanArr[$j]=0;
						
					}
				}
			}
						for($j=0;$j<$total;$j++)
			{
				if($mesajlasilanArr[$j]==0)
				{
				
					
				}
			}
		
			
			
			for($j=0;$j<$total;$j++)
			{
				if($mesajlasilanArr[$j]!=0)
				{
				
						$sql="SELECT * FROM `user`  where id='$mesajlasilanArr[$j]'";
                                            $sorgula=$db->query($sql);
                                              $userCek=$sorgula->fetch(PDO::FETCH_ASSOC);
					
							$value = array( 
						"gonderenId"=>$mesajlasilanArr[$j],
						"name"=>$userCek['name'],
						"surname"=>$userCek['surname'],
						"path"=>$userCek['path']
							
						); 
					
							array_push($asd,$value);
				}
				
			}
			
			
		
	
						$json = json_encode($asd); 
						
						echo $json ;

	           



/*
            function atilmaZamaniHesapla($tarih)
			{
				$tarih=explode(" ",$tarih);//bu ilk kayıt tarihi olsun

					$ilktarih=$tarih[0];

					$sontarih=date("Y-m-d");//buda şu anki tarih olsun



					$ilktarihstr=strtotime($ilktarih);//ilk tarihi strtotime ile çeviriyom



					$sontarihstr=strtotime($sontarih);//ilk tarihi strtotime ile çeviriyom



					$gun=($sontarihstr-$ilktarihstr)/86400;//sondan ilki çıkarıp 86400 e bölüyoz bu bize günü verecek

					$ay=$gun/30;

					$yil=$ay/12;



					 $ilksaat=$tarih[1];//bu ilk saatimiz



					$sonsaat=date("H:i:s");//buda şu anki saat olsun



				  

					$ilksaatstr=strtotime($ilksaat);



					$sonsaatstr=strtotime($sonsaat);//aynı şekilde saatleride strtotime liyoırum



					$saniye=$sonsaatstr-$ilksaatstr;//sondan ilki çıkarıyom direk bize saniyeyi verecek

					$dakika=$saniye/60;

					$saat=$dakika/60;

			   

					if ($yil>=1) {

						return round($yil)." Yıl Önce";

					}elseif ($ay>=1) {

						return round($ay)." Ay Önce";

					}

					elseif ($gun>=1) {

						return round($gun)." Gün Önce";

					}elseif ($saat>=1) {

						return round($saat)." Saat Önce";

					}

					elseif ($dakika>=1) {

						return round($dakika)." Dakika Önce";

					}

					 elseif ($saniye<=59 && $saniye>=0) {

						return "Az Önce";

					}
			}


*/
            

            	

            

            	



          







?>