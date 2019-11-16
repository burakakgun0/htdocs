<div class="col-md-2 static">
              <div id="sticky-sidebar">
                <h4 class="grey">Aktivite</h4>

<?php  

include 'config/config.php';


$id=$_SESSION['id'];

$asd=array();


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

				$sqlc = "SELECT * FROM `notification` WHERE `etkilenen_user_id`='$id'  order by id desc limit 5";
	            $pos=$db->query($sqlc);
	         
				
			 
					  if ($pos->rowCount() > 0) {
							$i=0;	
					// output data of each row
					while($posCek = $pos->fetch(PDO::FETCH_ASSOC)) {	
$abvd=$posCek['olusturan_user_id']; 
$sqlabc=$db->query("SELECT  * from user where id='$abvd'");
			
			//$rows=$sqlabc->rowCount();
			$userNameCek=$sqlabc->fetch(PDO::FETCH_ASSOC);

$once=atilmaZamaniHesapla($posCek['create_time']);

	?>

			<div class="feed-item">
                  <div class="live-activity">
                    <p><a href="<?php echo $userNameCek['username'] ?>" class="profile-link"><?php 


echo $userNameCek['name'];
?></a> <?php echo $posCek['message'] ?></p>
                    <p class="text-muted"><?php echo $once ?></p>
                  </div>
                </div>
<?php

}}
?>
               
      
              </div>
            </div>