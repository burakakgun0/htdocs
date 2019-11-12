<?php
$usNM=$_GET['username'];
$kul=$db->query("SELECT * FROM `user` WHERE username='$usNM'");
$kulCek=$kul->fetch(PDO::FETCH_ASSOC);

?>

<div class="timeline-cover">

          <!--Timeline Menu for Large Screens-->
          <div class="timeline-nav-bar hidden-sm hidden-xs">
            <div class="row">
              <div class="col-md-3">
                <div class="profile-info">
                  <img src="images/users/user-1.jpg" alt="" class="img-responsive profile-photo" />
                  <h3><?=$kulCek['name'].' '.$kulCek['surname']; ?></h3>
                  <p class="text-muted"><?=$kulCek['username'];?></p>
                </div>
              </div>
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                  <li><a href="<?=$kulCek['username'];?>" <?php if(@$current=='tunel') { ?>class="active" <?php } ?>>Zaman Tüneli</a></li>
                  <li><a href="<?=$kulCek['username'];?>/about" <?php if(@$current=='about') { ?>class="active" <?php } ?>>Hakkında</a></li>
                </ul>
                <ul class="follow-me list-inline">
                  <li>1,299 kişi takip ediyor</li>
                  <li><button class="btn-primary">Takip Et</button></li>
                  <?php if ($_GET['username']==$sesCek['username']) { ?>
                   <li><a href="<?=$kulCek['username'];?>/settings"> <button class="btn-primary">Profili Düzenle</button></a></li>
                  <?php } ?>
                    
                </ul>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
              <img src="images/users/user-1.jpg" alt="" class="img-responsive profile-photo" />
              <h4><?=$kulCek['name'].' '.$kulCek['surname']; ?></h4>
              <p class="text-muted"><?=$kulCek['username'];?></p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                  <li><a href="<?=$kulCek['username'];?>" <?php if($current=='tunel') { ?>class="active" <?php } ?>>Zaman Tüneli</a></li>
                  <li><a href="<?=$kulCek['username'];?>/about" <?php if($current=='about') { ?>class="active" <?php } ?>>Hakkında</a></li>
              </ul>
              <button class="btn-primary">Takip Et</button>
            </div>
          </div><!--Timeline Menu for Small Screens End-->

        </div>