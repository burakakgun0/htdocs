<?php include 'head.php'; 

if (!isset($_GET['page'])) {  $current='tunel'; }
if ($_GET['group'] && @$_GET['page']) {  $current='about'; }

?>
  <body>

    <!-- Header
    ================================================= -->
	<?php include 'header2.php'; ?>
    <!--Header End-->

    <div class="container">

      <!-- Timeline
      ================================================= -->
      <div class="timeline">
        <?php include 'grouptimelinecover.php'; ?>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7">

              <!-- Post Create Box
              ================================================= -->
              <?php include 'grouppostcreate.php' ?><!-- Post Create Box End-->

              <?php if (!isset($_GET['page'])) {  ?>
              
              <!-- Post Content
              ================================================= -->
               <?php 
              $US=$db->query("SELECT * FROM `facegroup` WHERE seo='$groupNM'");
              $USCEK=$US->fetch(PDO::FETCH_ASSOC);
              $USid=$USCEK['id'];
              $sql=$db->query("SELECT * FROM `post` WHERE group_id='$USid' order by id DESC");
                $rand=rand();   while($postcek=$sql->fetch(PDO::FETCH_ASSOC)) { $rand++
            ?>
            <div style="margin-top: -3%" class="post-content">
              <div class="post-date hidden-xs hidden-sm">
                  <h5><?php $postUs=$postcek['user_id']; 
                            $postUser=$db->query("SELECT * FROM `user` WHERE id='$postUs'");
                            $postUserCek=$postUser->fetch(PDO::FETCH_ASSOC);
                            echo $postUserCek['name'];
                      ?></h5>
                  <p class="text-grey">
<?php
date_default_timezone_set('Europe/Istanbul');
$tarih=explode(" ",$postcek['create_time']);//bu ilk kayıt tarihi olsun
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
echo round($yil)." Yıl Önce";
}elseif ($ay>=1) {
echo round($ay)." Ay Önce";
}
elseif ($gun>=1) {
echo round($gun)." Gün Önce";
}elseif ($saat>=1) {
echo round($saat)." Saat Önce";
}
elseif ($dakika>=1) {
echo round($dakika)." Dakika Önce";
}
elseif ($saniye<=59 && $saniye>=0) {
echo "Az Önce";
}
?></p>
                </div>
              <?php 
              $POSTID=$postcek['id'];
              $postDetail=$db->query("SELECT * FROM `post_detail` WHERE post_id='$POSTID' order by id DESC");
              $postDetSay=$postDetail->rowCount();
             
               
               
               ?>
               <?php if ($postDetSay>0) {  $postDetailCek=$postDetail->fetch(PDO::FETCH_ASSOC);  ?>
                <?php if($postDetSay==1) { ?>
                 <?php if ($postDetailCek['mime']=='jpeg' || $postDetailCek['mime']=='jpg') { ?>
              <li>
                  <div style="margin-top: -4%; background-color: #6d6e71" class="img-wrapper" data-toggle="modal" data-target=".photo-<?=$rand;?>">
                    <center><img style="max-width: 100% !important;" src="<?=$postDetailCek['path'] ?>" alt="photo" /></center>
                  </div>
                  <div class="modal fade photo-<?=$rand;?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <center><img style="max-width: 100% !important;" src="<?=$postDetailCek['path'] ?>" alt="photo" /></center>
                      </div>
                    </div>
                  </div>
                </li>
              <?php } else { ?>
                <li>
                  
                    <center><div style="margin-top: -4%;" class="video-wrapper">
                <video class="post-video" controls> <source src="<?=$postDetailCek['path'] ?>" type="video/mp4"> </video>
              </div></center>
                  
                  
                </li>
              <?php } ?>
               <?php } else { ?>

                <ul class="album-photos">

                  <?php $sayi=rand(); $sayi2=rand(); 
                  $postDetail2=$db->query("SELECT * FROM `post_detail` WHERE post_id='$POSTID' order by id DESC");
                  while($postDetailCek2=$postDetail2->fetch(PDO::FETCH_ASSOC)){ $sayi++; $sayi2++?>
                  
                 
                <li>
                  <div  class="img-wrapper" data-toggle="modal" data-target=".photo-<?=$sayi;?>">
                     <?php if ($postDetailCek2['mime']=="mp4") { ?>
                       <img src="dimg/play.jpg" alt="photo" />
                     <?php } else {?> 
                      <img src="<?=$postDetailCek2['path'] ?>" alt="photo" />
                     <?php } ?>
                    
                  </div>
                  <div class="modal fade photo-<?=$sayi;?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                         <?php if ($postDetailCek2['mime']=="mp4") { ?>
                        <center><div  class="video-wrapper">
                <video class="post-video" controls> <source src="<?=$postDetailCek2['path'] ?>" type="video/mp4"> </video>
              </div></center>
                        <?php } else {?> 
                        <img src="<?=$postDetailCek2['path'] ?>" alt="photo" />
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </li>
              <?php } ?>
              </ul>
              <?php }  } ?>
              <?php $postUs=$postcek['user_id']; 
                            $postUser=$db->query("SELECT * FROM `user` WHERE id='$postUs'");
                            $postUserCek=$postUser->fetch(PDO::FETCH_ASSOC);
                            ?>
              <div class="post-container">
                <img src="<?php if($postUserCek['path']==null) { echo 'dimg/defaultavatar.png'; } else { echo $postUserCek['path']; }  ?>" alt="user" class="profile-photo-md pull-left" />
                <div class="post-detail">
                  <div class="user-info">
                    
                    <h5><a href="<?=$postUserCek['username']; ?>" class="profile-link">
                      <?php
                            echo $postUserCek['name'].' '.$postUserCek['surname'];
                      ?>
                    </a> <!--<span class="following">Seni Takip Ediyor</span>--></h5>
                    <p class="text-muted"><?php

if ($yil>=1) {
echo round($yil)." Yıl Önce";
}elseif ($ay>=1) {
echo round($ay)." Ay Önce";
}
elseif ($gun>=1) {
echo round($gun)." Gün Önce";
}elseif ($saat>=1) {
echo round($saat)." Saat Önce";
}
elseif ($dakika>=1) {
echo round($dakika)." Dakika Önce";
}
elseif ($saniye<=59 && $saniye>=0) {
echo "Az Önce";
}
?></p>
                  </div>
                  <div  class="reaction">
                    <div style="float: left;" id="like<?=$postcek['id'];?>">
                      <?php 
                      $userrID=$sesCek['id'];
                      $posttID=$postcek['id'];
                      $likeS="SELECT * FROM `post_likes` WHERE user_id=$userrID and post_id=$posttID and active='E'";
                      $resault=$db->query($likeS);
                      $likeD=$resault->rowCount();
                      if ($likeD>0) { ?>
                    <a onclick="unlike('<?=$postcek['id'];?>','<?=$sesCek['id'] ?>')" class="btn text-green"><i  class="icon ion-thumbsup"></i>
                      <span id="lik<?=$postcek['id'];?>">
                      <?php 
                      $posttID=$postcek['id'];
                      $likeZ="SELECT * FROM `post_likes` WHERE post_id='$posttID' and active='E'";
                      $resaultz=$db->query($likeZ);
                      $likezZ=$resaultz->rowCount();
                      echo $likezZ; 
                      ?>
                    </span></a>
                  <?php } else { ?>
                    <a onclick="like('<?=$postcek['id'];?>','<?=$sesCek['id'] ?>')" class="btn text-green"><i  class="icon ion-thumbsup"></i>
                      <span id="lik<?=$postcek['id'];?>">
                      <?php 
                      $posttID=$postcek['id'];
                      $likeZ="SELECT * FROM `post_likes` WHERE post_id='$posttID' and active='E'";
                      $resaultz=$db->query($likeZ);
                      $likezZ=$resaultz->rowCount();
                      echo $likezZ; 
                      ?>
                    </span></a>
                  <?php } ?>
                   </div>
                    <a class="btn text-blue"><i class="fa fa-comment" ></i> <span id="com<?=$postcek['id'];?>"><?=$postcek['takenCommentCount']?></span></a>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-text">
                    <p>
                      <?=$postcek['message'] ?>
                    
                  </div>
                  <div class="line-divider"></div>
                  <div id="yorumlar<?=$postcek['id']?>">
                    <?php 
                    $postId=$postcek['id'] ;
                    $com="SELECT * FROM `post_comments` WHERE post_id='$postId' and is_spam=0 order by id DESC limit 3";
                    $resultt=$db->query($com); 
                    while($comCek=$resultt->fetch(PDO::FETCH_ASSOC)) {?>
                  <div class="post-comment">
                    <img src="<?php if($postUserCek['path']==null) { echo 'dimg/defaultavatar.png'; } else { echo $postUserCek['path']; }  ?>" alt="" class="profile-photo-sm" />
                    <p><a href="<?=$postUserCek['username']; ?>" class="profile-link"><?php $usId=$comCek['user_id'];
                                                                    $uS="SELECT * FROM `user` WHERE id='$usId'";
                                                                    $uSs=$db->query($uS); 
                                                                    $uScek=$uSs->fetch(PDO::FETCH_ASSOC); 
                                                                    echo $uScek['username'];
                                                                    ?>
                        </a></i><?=$comCek['comment'];?> </p>
                  </div>
                <?php } ?>
                  
                </div>
               <form class="form" action="" method="" onsubmit="return false">
                  <div style="width: 70%"  class="post-comment">
                    <img src="<?php if($postUserCek['path']==null) { echo 'dimg/defaultavatar.png'; } else { echo $postUserCek['path']; }  ?>" alt="" class="profile-photo-sm" />
                    <input id="message<?=$postcek['id']?>" name="comment"  type="text" class="form-control" placeholder="Yorum Yap">
                    <input type="hidden" class="id" id="id" name="id" value="<?=$postcek['id']?>">
                  </div>
                  <div style="float: right; margin-top: 3%;">
                    <button type="submit" name="commented" onclick="ref('<?=$postcek['id']?>','<?=$sesCek['username']?>','<?=$postcek['takenCommentCount'];?>','<?php if($sesCek['path']==null) {echo 'dimg/defaultavatar.png';} else {echo $sesCek['path'];}?>')"  id="get" style="width: 80%;" class="btn btn-primary pull-right get"><span style="margin-right: 15px">Paylaş</span></button>
                  </div>
                </form>
                </div>
              </div>
            </div>
          <?php } ?>

              <?php } ?>
              <?php if ($_GET['group'] && @$_GET['page']) { ?>
              <!-- About
              ================================================= -->
              <div class="about-profile">
                <div class="about-content-block">
                  <h4 class="grey"><i class="ion-ios-information-outline icon-in-title"></i>Grup Açıklaması</h4>
                  <p><?=$groupCek['description']; ?></p>
                </div>
                <div class="about-content-block">
                  <h4 class="grey"><i class="ion-ios-briefcase-outline icon-in-title"></i>Grup Üyeleri</h4>
                  <div class="organization">
                   
                    <div class="work-info">
                      <?php $grupId=$groupCek['id'];
                          $groupUye=$db->query("SELECT * FROM `facegroup_users` WHERE group_id='$grupId'");
                          while($groupUyeler=$groupUye->fetch(PDO::FETCH_ASSOC)){ 
                            $userGroup=$groupUyeler['user_id'];
                            $grupUye=$db->query("SELECT * FROM `user` WHERE id='$userGroup'");
                            $grupUyeCek=$grupUye->fetch(PDO::FETCH_ASSOC);
                            ?>
                      <a href="<?=$grupUyeCek['username']; ?>"><img src="<?php if($grupUyeCek['path']==null) { echo 'dimg/defaultavatar.png'; } else { echo $grupUyeCek['path'];} ?>" alt="" class="profile-photo-md"></a>
                          <?php } ?>
                    </div>
                  </div>
                 
                </div>
                
                
              </div>
            <?php } ?>
            </div>
            <?php include 'activitygroup.php'; ?>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer
    ================================================= -->
   <?php include 'footer.php'; ?>
    
    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>
    

    <!-- Scripts
    ================================================= -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/script.js"></script>

  </body>

</html>

<script type="text/javascript" src="a\b\c\d\e\f\g\a\custom4.js">

        

 </script>
