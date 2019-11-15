<?php include 'head.php'; ?>
  <body>

    <!-- Header
    ================================================= -->
		<?php include 'header2.php'; ?>
    <!--Header End-->
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
    <div class="container">

      <!-- Timeline
      ================================================= -->
      <div class="timeline">
        <?php include 'grouptimelinecover.php'; 
          $_SESSION['seo']=$groupCek['id'];
        ?>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3">
              
              <!--Edit Profile Menu-->
              <ul class="edit-menu">
              	<li ><i class="icon ion-ios-information-outline"></i><a href="<?=$groupCek['seo']; ?>/group/settings">Grup Ayarları</a></li>
                
              </ul>
            </div>
            <div class="col-md-7">

              <div class="edit-profile-container">
                
                
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-briefcase-outline"></i>Grup Ayarları</h4>
                  <div class="line"></div>
                  <p>Grup Bilgilerinizi bu sayfa ile güncelleyebilirsiniz.</p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                 
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="company">Grup Adı</label>
                        <input id="name" class="form-control input-group-lg" type="text" name="company" title="Enter Company" placeholder="Company name" disabled="" value="<?=$groupCek['name']; ?>" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-info">Grup Açıklaması</label>
                        <textarea id="description" name="information" class="form-control" placeholder="Bir şeyler yaz..." rows="4" cols="400"><?=$groupCek['description'] ?></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="from-date">Grup Profil Fotoğrafı Değiştir</label>
                        <input id="profile" class="form-control input-group-lg" onchange="loadFile(event)" type="file"  title="Fotoğraf Seç" placeholder="from"  />
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="from-date">Grup Kapak Fotoğrafı Değiştir</label>
                        <input id="cover" class="form-control input-group-lg" onchange="loadFile2(event)" type="file"  title="Fotoğraf Seç" placeholder="from"  />
                      </div>
                    </div>
                    <div id="resimler">
       
                    </div>
                    <div id="load"> </div>
                   
                    <button onclick="groupChange()" class="btn btn-primary">Kaydet</button>
                
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

<script  type="text/javascript" >
var xx='<?=$groupCek['id']; ?>';
</script>

<script  type="text/javascript"  src="a\b\c\d\e\f\g\a\custom3.js">



</script> 

