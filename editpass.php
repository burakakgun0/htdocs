<?php include 'head.php'; ?>
  <body>

    <!-- Header
    ================================================= -->
		<?php include 'header2.php'; ?>
    <!--Header End-->

    <div class="container">

      <!-- Timeline
      ================================================= -->
      <div class="timeline">
        <?php include 'timelinecover.php'; ?>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3">
              
              <!--Edit Profile Menu-->
              <ul class="edit-menu">
              	<li ><i class="icon ion-ios-information-outline"></i><a href="<?=$kulCek['username'];?>/settings">Hakkımda</a></li>
                <li ><i class="icon ion-ios-briefcase-outline"></i><a href="<?=$kulCek['username'];?>/settings/work">İş</a></li>
                <li ><i class="icon ion-ios-heart-outline"></i><a href="<?=$kulCek['username'];?>/settings/interest">İlgi Alanlarım</a></li>
                <li ><i class="icon ion-ios-settings"></i><a href="<?=$kulCek['username'];?>/settings/account">Hesap Ayarlarım</a></li>
                <li><i class="icon ion-ios-locked-outline"></i><a href="<?=$kulCek['username'];?>/settings/photos">Profil & Kapak Fotoğrafım</a></li>
                <li class="active"><i class="icon ion-ios-locked-outline"></i><a href="<?=$kulCek['username'];?>/settings/password">Şifremi Değiştir</a></li>
              </ul>
            </div>
            <div class="col-md-7">

             <!-- Change Password
              ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-locked-outline"></i>Şifremi Değiştir</h4>
                  <div class="line"></div>
                  <p>Şifrenizi Değiştirebilirsiniz.</p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                 
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-password">Eski Şifreniz</label>
                        <input id="oldpw" class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="Old password"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label>Yeni Şifreniz</label>
                        <input id="pw1" class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="New password"/>
                      </div>
                      <div class="form-group col-xs-6">
                        <label>Yeni Şifreniz (Tekrar)</label>
                        <input id="pw2" class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="Confirm password"/>
                      </div>
                    </div>
                 
                    <button onclick="accChange()" class="btn btn-primary">Şifremi Güncelle</button>
              
                </div>
              </div>
            </div>
            <?php include 'activity.php'; ?>
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


<script  src="a\b\c\d\e\f\g\a\custom12.js">
  
</script>