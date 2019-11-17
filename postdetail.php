<?php include 'head.php' ?>
  <body>

    <!-- Header
    ================================================= -->
		<?php include 'header2.php'; ?>
    <!--Header End-->

    <div id="page-contents">
    	<div class="container">
    		<div class="row">

          <!-- Newsfeed Common Side Bar Left
          ================================================= -->
    			<?php include 'userside.php'; ?>
    			<div class="col-md-7">

            <!-- Post Create Box
            ================================================= -->
           
            <!-- Post Create Box End-->

            <!-- Post Content
            ================================================= -->
            <?php 
          	$postLink=$_GET['link'];
            $sql=$db->query("SELECT * FROM `post` WHERE link='$postLink'");
             $rand=rand();     while($postcek=$sql->fetch(PDO::FETCH_ASSOC)) { 
            ?>
            <div class="post-content">
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
                  while($postDetailCek2=$postDetail2->fetch(PDO::FETCH_ASSOC)){ ?>
                  
                 
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
                <img src="<?php if($postUserCek['path']==null) {echo 'dimg/defaultavatar.png';} else {echo $postUserCek['path'];}?>" alt="user" class="profile-photo-md pull-left" />
                <div class="post-detail">
                  <div class="user-info">
                    
                    <h5><a href="<?=$postUserCek['username']; ?>" class="profile-link">
                      <?php
                            echo $postUserCek['name'].' '.$postUserCek['surname'];
                      ?>
                    </a> <?php if($postcek['group_id']!=NULL) {
                    	$grID=$postcek['group_id'];
                    	$grp=$db->query("SELECT * FROM `facegroup` WHERE id='$grID'");
                    	$grpCek=$grp->fetch(PDO::FETCH_ASSOC); ?>
                    	<a href="<?=$grpCek['seo']; ?>/group"><span class="following"> <?php echo '<'.' '.$grpCek['name']; ?> </span></a>
                    <?php } ?>
                </h5>
                    <p class="text-muted"><?php
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
                  <style type="text/css">
                  	#info
{
	font-size: 18px;
	color: #555;
	text-align: center;
	margin-bottom: 25px;
}

a{
	color: #074E8C;
}

.scrollbar
{
	margin-left: 30px;
	float: left;
	height: 300px;
	width: 350px;
	overflow-y: scroll;
	margin-bottom: 25px;
}

.force-overflow
{
	min-height: 450px;
}

#wrapper
{
	
	width: 500px;
	margin: auto;
}

/*
 *  STYLE 1
 */

#style-1::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	border-radius: 10px;
	background-color: #F5F5F5;
}

#style-1::-webkit-scrollbar
{
	width: 12px;
	background-color: #F5F5F5;
}

#style-1::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
	background-color: #555;
}</style>
                  
  	<?php if($postcek['takenCommentCount']>5) {?>
  <div id="wrapper">
  

<div class="scrollbar" id="style-1">
  <div class="force-overflow">
  <?php } ?>
                  <div id="yorumlar<?=$postcek['id']?>">
                    <?php 
                    $postId=$postcek['id'] ;
                    $com="SELECT * FROM `post_comments` WHERE post_id='$postId' and is_spam=0 order by id DESC";
                    $resultt=$db->query($com); 
                    while($comCek=$resultt->fetch(PDO::FETCH_ASSOC)) {?>
                      <?php $usId=$comCek['user_id'];
                                                                    $uS="SELECT * FROM `user` WHERE id='$usId'";
                                                                    $uSs=$db->query($uS); 
                                                                    $uScek=$uSs->fetch(PDO::FETCH_ASSOC); ?>
                  <div class="post-comment">
                    <img src="<?php if($uScek['path']==null) {echo 'dimg/defaultavatar.png';} else {echo $uScek['path'];}?>" alt="" class="profile-photo-sm" />
                    <p><a href="<?=$uScek['username'] ?>" class="profile-link"><?php
                                                                    echo $uScek['username'];
                                                                    ?>
                        </a></i><?=$comCek['comment'];?> </p>
                  </div>
                <?php } ?>
                  </div>
                  <?php if($postcek['takenCommentCount']>5) {?>
  </div>

</div>
                </div>
  <?php } ?>

                <form class="form" action="" method="" onsubmit="return false">
                  <div style="width:70%; float: left;" class="post-comment">
                    <img src="<?php if($uSCek['path']==null) {echo 'dimg/defaultavatar.png';} else {echo $uSCek['path'];}?>" alt="" class="profile-photo-sm" />
                    <input id="message<?=$postcek['id']?>" name="comment"  type="text" class="form-control" placeholder="Yorum Yap">
                    <input type="hidden" class="id" id="id" name="id" value="<?=$postcek['id']?>">
                  </div>
                  <div  style="float: right; margin-top: 3%;">
                    <button type="submit" name="commented" onclick="ref('<?=$postcek['id']?>','<?=$sesCek['username']?>','<?=$postcek['takenCommentCount'];?>','<?php if($sesCek['path']==null) {echo 'dimg/defaultavatar.png';} else {echo $sesCek['path'];}?>')"  id="get" style="width: 80%;" class="btn btn-primary pull-right get"><span style="margin-right: 15px">Paylaş</span></button>
                  </div>
                </form>
                </div>
              </div>
            </div>
          <?php } ?>
           
            

           
          </div>

          <!-- Newsfeed Common Side Bar Right
          ================================================= -->
    			<?php include 'rightbar.php'; ?>
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


<script type="text/javascript" src="a\b\c\d\e\f\g\a\custom8.js">
//Yorumda Form Sıfırla


     </script>    
    

