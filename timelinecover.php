<?php
$usNM=$_GET['username'];
$kul=$db->query("SELECT * FROM `user` WHERE username='$usNM'");
$kulCek=$kul->fetch(PDO::FETCH_ASSOC);

?>

<div class="timeline-cover" style="background: url(<?php if($kulCek['background_path']==null) { echo 'dimg/coverdefault.jpg'; } else { echo $kulCek['background_path']; }  ?>) no-repeat;">

          <!--Timeline Menu for Large Screens-->
          <div class="timeline-nav-bar hidden-sm hidden-xs">
            <div class="row">
              <div class="col-md-3">
                <div class="profile-info">
                  <img src="<?php if($kulCek['path']==null) { echo 'dimg/defaultavatar.png'; } else { echo $kulCek['path']; }  ?>" alt="" class="img-responsive profile-photo" />
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
                  <!--<li>1,299 kişi takip ediyor</li>
                  <li><button class="btn-primary">Takip Et</button></li>-->
                  <?php if ($_GET['username']==$sesCek['username']) { ?>
                   <li><a href="<?=$kulCek['username'];?>/settings"> <button class="btn-primary">Profili Düzenle</button></a></li>
                  <?php } ?>

                  <?php if($kulCek['id']!=$sesCek['id']) { ?>
                  <li ><button data-toggle="modal" data-target=".photo-1" class="btn-primary">Mesaj At</button></li>
                  <?php } ?>
                  <!-- MESAJ AT -->
                  
            
              <!-- MESAJ AT -->
                    
                </ul>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->
            <ul class="album-photos">
                <li>
                  
                  <div  class="modal fade photo-1" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                    <div  class="modal-dialog modal-lg">
                      <center><div style=" margin-top: 30%;" class="modal-content">
                      

              
              <div style="padding: 10px; " class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-android-checkmark-circle"></i>Mesaj Gönder</h4>
                  <div class="line"></div>
                  <h4 class="grey"><i class="fa fa-commenting"></i><?=$kulCek['name'].' '.$kulCek['surname']; ?> Kullanıcısına Mesaj At</h4>
                 
                  <div class="line"></div>
                </div>
                
                 
                    
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-info">Mesajınız</label>
                        <textarea id="message" name="information" class="form-control" placeholder="Bir şeyler yaz..." rows="4" cols="400"></textarea>
                      </div>
                    </div>
                    <button onclick="msjGonder(<?=$kulCek['id']; ?>)" class="btn btn-primary">Gönder</button>
              
            </div>
                      </div></center>
                    </div>
                  </div>
                </li>
           
                

              
              </ul>
          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
              <img src="<?php if($kulCek['path']==null) { echo 'dimg/defaultavatar.png'; } else { echo $kulCek['path']; }  ?>" alt="" class="img-responsive profile-photo" />
              <h4><?=$kulCek['name'].' '.$kulCek['surname']; ?></h4>
              <p class="text-muted"><?=$kulCek['username'];?></p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                  <li><a href="<?=$kulCek['username'];?>" <?php if($current=='tunel') { ?>class="active" <?php } ?> > Zaman Tüneli </a></li>
                  <li><a href="<?=$kulCek['username'];?>/about" <?php if($current=='about') { ?>class="active" <?php } ?> >Hakkında </a></li>
              </ul>
              <?php if ($_GET['username']==$sesCek['username']) { ?>
                   <li><a href="<?=$kulCek['username'];?>/settings"> <button class="btn-primary">Profili Düzenle</button></a></li>
                  <?php } ?>
             <?php if($kulCek['id']!=$sesCek['id']) { ?>
                  <li><button data-toggle="modal" data-target=".photo-1" class="btn-primary">Mesaj At</button></li>
                <?php } ?>
            </div>
          </div><!--Timeline Menu for Small Screens End-->

        </div>

          <script type="text/javascript" src="a\b\c\d\e\f\g\a\custom20.js"></script>