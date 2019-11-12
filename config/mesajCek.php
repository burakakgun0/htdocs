<?php 
ob_start();
session_start();
include 'config.php'; 


$asd=array();
	$id=$_POST['userId'];
         $sesId=$_SESSION['id'];
		//	$sqll=$db->query("Update dm set okundumu=? where (chat_user_id='$sesId' and chat_usertwo_id='$id') or  (chat_user_id='$id' and chat_usertwo_id='$sesId') and  okundumu=0");	
		
$sqll = "Update dm set okundumu=? where (chat_user_id='$id' and chat_usertwo_id='$sesId') and  okundumu=0";
$stmt= $db->prepare($sqll);
$a=1;
$stmt->execute([$a]);
		
			$sql=$db->query("SELECT  d.atilma_zamani ,d.message,c.name ,c.surname,c.id from dm d ,user c  where chat_user_id='$sesId' and chat_usertwo_id='$id' and  c.id=d.chat_user_id union ALL SELECT  b.atilma_zamani,b.message,a.name ,a.surname,a.id from dm b ,user a  where chat_user_id='$id' and chat_usertwo_id='$sesId' and  a.id=b.chat_user_id order by atilma_zamani desc");
			
			$rows=$sql->rowCount();
		
	            if ($rows>0) {

					while($mesajCek=$sql->fetch(PDO::FETCH_ASSOC))
					{
				
			$tarih=$mesajCek['atilma_zamani'];
			 $zaman= atilmaZamaniHesapla($tarih);
						$value = array( 
						"mesajAtan"=>$mesajCek['name'], 
						"mesaj"=>$mesajCek['message'],
						"nekadaronce"=>$zaman,
						"gonderenId"=>$mesajCek['id']
						); 
   
						// Use json_encode() function 
					
						   
						// Display the output 
						//echo($json); 
									
					
				array_push($asd,$value);
					}
						$json = json_encode($asd); 
						
			echo $json ;

	            } else {

	            

            		echo "hata";

	            }




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