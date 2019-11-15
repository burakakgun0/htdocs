<?php include 'head.php'; ?>
  <body>

    <!-- Header
    ================================================= -->
		<?php include 'header2.php'; ?>
    <!--Header End-->

    <div class="container">
<style type="text/css">
 label.filebutton {
    width:15.75px;
    height:22px;
    overflow:hidden;
    position:relative;
   
}

label span input {
    z-index: 999;
    line-height: 0;
    font-size: 50px;
    position: absolute;
    top: -2px;
    left: -700px;
    opacity: 0;
    filter: alpha(opacity = 0);
    -ms-filter: "alpha(opacity=0)";
    cursor: pointer;
    _cursor: hand;
    margin: 0;

    padding:0;
}
  #progress-wrp {
  border: 1px solid #0099CC;
  padding: 1px;
  position: relative;
  height: 30px;
  border-radius: 3px;
  margin: 10px;
  text-align: left;
  background: #fff;
  box-shadow: inset 1px 3px 6px rgba(0, 0, 0, 0.12);
}

#progress-wrp .progress-bar {
  height: 100%;
  border-radius: 3px;
  background-color: #f39ac7;
  width: 0;
  box-shadow: inset 1px 1px 10px rgba(0, 0, 0, 0.11);
}

#progress-wrp .status {
  top: 3px;
  left: 50%;
  position: absolute;
  display: inline-block;
  color: #000000;
}
</style>
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
                <li><i class="icon ion-ios-briefcase-outline"></i><a href="<?=$kulCek['username'];?>/settings/work">İş</a></li>
                <li ><i class="icon ion-ios-heart-outline"></i><a href="<?=$kulCek['username'];?>/settings/interest">İlgi Alanlarım</a></li>
                <li ><i class="icon ion-ios-settings"></i><a href="<?=$kulCek['username'];?>/settings/account">Hesap Ayarlarım</a></li>
                <li class="active"><i class="icon ion-ios-list-outline"></i><a href="<?=$kulCek['username'];?>/settings/photos">Profil & Kapak Fotoğrafım</a></li>
                <li><i class="icon ion-ios-locked-outline"></i><a href="<?=$kulCek['username'];?>/settings/password">Şifremi Değiştir</a></li>
              </ul>
            </div>
            <div class="col-md-7">

             <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-heart-outline"></i>Profil & Kapak Fotoğraflarımı Düzenle</h4>
                  <div class="line"></div>
                  <p>Profil ve Kapak fotoğraflarınızı bu sayfa ile güncelleyebilirsiniz.</p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  
                  <div class="line"></div>
                  <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="from-date">Profil Fotoğrafı Değiştir</label>
                        <input id="profile" class="form-control input-group-lg" onchange="loadFile(event)" type="file"  title="Fotoğraf Seç" placeholder="from"  />
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="from-date">Kapak Fotoğrafı Değiştir</label>
                        <input id="cover" class="form-control input-group-lg" onchange="loadFile2(event)" type="file"  title="Fotoğraf Seç" placeholder="from"  />
                      </div>
                    </div>
                <div id="resimler">
       
                    </div>
                    <div id="load"> </div>
                  
                   <button onclick="photoChange()" class="btn btn-primary">Kaydet</button>
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

<script  src="a\b\c\d\e\f\g\a\custom17.js">
  

</script>