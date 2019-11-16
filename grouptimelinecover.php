<?php
$groupNM=$_GET['group'];
$group=$db->query("SELECT * FROM `facegroup` WHERE seo='$groupNM'");
$groupCek=$group->fetch(PDO::FETCH_ASSOC);

?>

<div class="timeline-cover" style="background:url(<?=$groupCek['bg_path'];?>) no-repeat;">

          <!--Timeline Menu for Large Screens-->
          <div class="timeline-nav-bar hidden-sm hidden-xs">
            <div class="row">
              <div class="col-md-3">
                <div class="profile-info">
                  <img src="<?=$groupCek['path'];?>" alt="" class="img-responsive profile-photo" />
                  <h3><?=$groupCek['name'];  ?></h3>
                  <p class="text-muted"><?=$groupCek['name'];?></p>
                </div>
              </div>
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                  <li><a href="<?=$groupCek['seo'];?>/group/" <?php if(@$current=='tunel') { ?>class="active" <?php } ?>>Zaman Tüneli</a></li>
                  <li><a href="<?=$groupCek['seo'];?>/group/about" <?php if(@$current=='about') { ?>class="active" <?php } ?>>Hakkında</a></li>
                </ul>
                <ul class="follow-me list-inline">
                  <!--<li>1,299 kişi takip ediyor</li>-->
                  <?php $grupId=$groupCek['id'];
                        $_SESSION['groupid']=$grupId; 
                        $kullaniciIdsi=$sesCek['id'];
                        $grupSorgu=$db->query("SELECT * FROM `facegroup_users` WHERE group_id='$grupId' and user_id='$kullaniciIdsi'")->rowCount();
                        if ($grupSorgu==0) {
                   ?>
                  <li><button id="name" onclick="inGroup()" value="<?=$groupCek['name'] ?>" class="btn-primary">Gruba Katıl</button></li>
                <?php } else {?> <li><button id="name" onclick="outGroup()" value="<?=$groupCek['name'] ?>" class="btn-primary">Gruptan Ayrıl</button></li> <?php } ?>
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
              <img src="<?=$groupCek['path'];?>" alt="" class="img-responsive profile-photo" />
              <h4><?=$groupCek['name']; ?></h4>
              <p class="text-muted"><?=$groupCek['name'];?></p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                  <li><a href="<?=$groupCek['seo'];?>/group/" <?php if($current=='tunel') { ?> class="active" <?php } ?>>Zaman Tüneli</a></li>
                  <li><a href="<?=$groupCek['seo'];?>/group/about" <?php if($current=='about') { ?> class="active" <?php } ?>>Hakkında</a></li>
              </ul>
              
            <?php  if ($grupSorgu==0) { ?>
              <button onclick="inGroup()" value="<?=$groupCek['name'] ?>" class="btn-primary">Gruba Katıl</button>
               <?php } else { ?> <button onclick="outGroup()" value="<?=$groupCek['name'] ?>" class="btn-primary">Gruptan Ayrıl</button> <?php } ?>
            </div>
          </div><!--Timeline Menu for Small Screens End-->

        </div>


        <script  type="text/javascript"  src="a\b\c\d\e\f\g\a\custom18.js"></script>