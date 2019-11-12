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
                <li><i class="icon ion-ios-briefcase-outline"></i><a href="<?=$kulCek['username'];?>/settings/work">İş</a></li>
                <li class="active"><i class="icon ion-ios-heart-outline"></i><a href="<?=$kulCek['username'];?>/settings/interest">İlgi Alanlarım</a></li>
                <li ><i class="icon ion-ios-settings"></i><a href="<?=$kulCek['username'];?>/settings/account">Hesap Ayarlarım</a></li>
                <li><i class="icon ion-ios-locked-outline"></i><a href="<?=$kulCek['username'];?>/settings/password">Şifremi Değiştir</a></li>
              </ul>
            </div>
            <div class="col-md-7">

             <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-heart-outline"></i>İlgi Alanlarım</h4>
                  <div class="line"></div>
                  <p>İlgi Alanlarınızı bu sayfa ile güncelleyebilirsiniz.</p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  
                  <div class="line"></div>
                  <div class="row">
                    <p class="custom-label"><strong>İlgi Alanlarım</strong></p>
                    <div class="form-group col-sm-8">
                      <input id="ilgi" class="form-control input-group-lg" type="text" name="interest" value="<?=$sesCek['ilgiler']; ?>" title="Choose Interest" placeholder="Bisiklet, Araba, Kedi, Köpek"/>
                    </div>
                    <div class="form-group col-sm-4">
                      <button onclick="accChange()" class="btn btn-primary">Kaydet</button>
                    </div>
                  </div>
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

<script>
  
$(document).ready(function(){
          accChangee = function (ilgi)
          {
          var degerler ='ilgi='+ilgi;
          console.log(degerler);
          $.ajax({
          type: "POST", 
          url: "config/changeAcc.php", 
          data : degerler,
          success: function(data) {
          
          if(data=="Okey")
          {
          alert("Değişiklik başarılı");
          }
          }
          });
          }
          });

    function accChange()
{
  
  var ilgi=document.getElementById("ilgi").value;
 
  

  accChangee(ilgi);
  

}

</script>