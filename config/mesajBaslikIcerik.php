<?php 
ob_start();
session_start();
include 'config.php'; 

$cxz=array();
$userId=$_SESSION['id'];
$asd=array();
$lengt=$_POST['leng'];
for($i=0;$i<$lengt;$i++)
{
	array_push($asd,$_POST['deger'. $i]);
	

$sql = "select message,okundumu,atilma_zamani  from dm where (chat_user_id='$userId' and chat_usertwo_id='$asd[$i]') or (chat_user_id='$asd[$i]' and chat_usertwo_id='$userId' ) order by atilma_zamani desc";  
$sorgula=$db->query($sql);
$messageCek=$sorgula->fetch(PDO::FETCH_ASSOC);


$sqll = "select message,okundumu,atilma_zamani  from dm where (chat_user_id='$asd[$i]' and chat_usertwo_id='$userId' ) order by atilma_zamani desc";  
$sorgulaa=$db->query($sqll);
$messageCekk=$sorgulaa->fetch(PDO::FETCH_ASSOC);




			$tarih=$messageCek['atilma_zamani'];
			 $zaman= atilmaZamaniHesapla($tarih);
						$value = array( 
						"mesaj"=>$messageCek['message'],
						"nekadaronce"=>$zaman,
						"okundumu"=>$messageCekk['okundumu']
						); 
   
						// Use json_encode() function 
					
						   
						// Display the output 
						//echo($json); 
									
					
				array_push($cxz,$value);



}	
		$json = json_encode($cxz); 
						
			echo $json ;
			


            function atilmaZamaniHesapla($tarih)
			{	date_default_timezone_set('Europe/Istanbul');
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


            

            	

            

            	



          







?>