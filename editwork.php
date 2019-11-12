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
                <li class="active"><i class="icon ion-ios-briefcase-outline"></i><a href="<?=$kulCek['username'];?>/settings/work">İş</a></li>
                <li ><i class="icon ion-ios-heart-outline"></i><a href="<?=$kulCek['username'];?>/settings/interest">İlgi Alanlarım</a></li>
                <li ><i class="icon ion-ios-settings"></i><a href="<?=$kulCek['username'];?>/settings/account">Hesap Ayarlarım</a></li>
                <li><i class="icon ion-ios-locked-outline"></i><a href="<?=$kulCek['username'];?>/settings/password">Şifremi Değiştir</a></li>
              </ul>
            </div>
            <div class="col-md-7">

              <div class="edit-profile-container">
                
                
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-briefcase-outline"></i>İş Bilgileri</h4>
                  <div class="line"></div>
                  <p>İş Bilgilerinizi bu sayfa ile güncelleyebilirsiniz.</p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                 
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="company">Şirket</label>
                        <input id="company" class="form-control input-group-lg" type="text" name="company" title="Enter Company" placeholder="Company name" value="<?=$sesCek['sirket']; ?>" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="designation">Branş</label>
                        <input id="designation" class="form-control input-group-lg" type="text" name="designation" title="Enter designation" placeholder="designation name" value="<?=$sesCek['brans']; ?>" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="from-date">Ne Zamandan Beri ?</label>
                        <input id="fromdate" class="form-control input-group-lg" type="text" name="date" title="Enter a Date" placeholder="from" value="<?=$sesCek['whatTime']; ?>" />
                      </div>
                    </div>
                    
                   
                    <button onclick="accChange()" class="btn btn-primary">Kaydet</button>
                
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
          accChangee = function (company,designation,fromdate)
          {
          var degerler ='company='+company+'&designation='+designation+'&fromdate='+fromdate;
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
  
  var company=document.getElementById("company").value;
  var designation=document.getElementById("designation").value;
  var fromdate=document.getElementById("fromdate").value;
  

  accChangee(company,designation,fromdate);
  

}

</script>