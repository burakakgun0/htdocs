<?php
$groupNM=$_GET['group'];
$group=$db->query("SELECT * FROM `facegroup` WHERE seo='$groupNM'");
$groupCek=$group->fetch(PDO::FETCH_ASSOC);

?>

<div class="timeline-cover">

          <!--Timeline Menu for Large Screens-->
          <div class="timeline-nav-bar hidden-sm hidden-xs">
            <div class="row">
              <div class="col-md-3">
                <div class="profile-info">
                  <img src="images/users/user-1.jpg" alt="" class="img-responsive profile-photo" />
                  <h3><?=$groupCek['name'];  ?></h3>
                  <p class="text-muted"><?=$groupCek['name'];?></p>
                </div>
              </div>
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                  <li><a href="<?=$groupCek['seo'];?>" <?php if(@$current=='tunel') { ?>class="active" <?php } ?>>Zaman Tüneli</a></li>
                  <li><a href="<?=$groupCek['seo'];?>/group/about" <?php if(@$current=='about') { ?>class="active" <?php } ?>>Hakkında</a></li>
                </ul>
                <ul class="follow-me list-inline">
                  <li>1,299 kişi takip ediyor</li>
                  <li><button class="btn-primary">Takip Et</button></li>
                  <?php if ($groupCek['owner_user_id']==$sesCek['id']) { ?>
                   <li><a href="<?=$groupCek['seo'];?>/group/settings"> <button class="btn-primary">Grubu Düzenle</button></a></li>
                  <?php } ?>
                    
                </ul>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
              <img src="images/users/user-1.jpg" alt="" class="img-responsive profile-photo" />
              <h4><?=$groupCek['name']; ?></h4>
              <p class="text-muted"><?=$groupCek['name'];?></p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                  <li><a href="<?=$groupCek['seo'];?>" <?php if($current=='tunel') { ?> class="active" <?php } ?>>Zaman Tüneli</a></li>
                  <li><a href="<?=$groupCek['seo'];?>/about" <?php if($current=='about') { ?> class="active" <?php } ?>>Hakkında</a></li>
              </ul>
              <button class="btn-primary">Gruba Katıl</button>
            </div>
          </div><!--Timeline Menu for Small Screens End-->

        </div>