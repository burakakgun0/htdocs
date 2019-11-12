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
                <li><i class="icon ion-ios-heart-outline"></i><a href="<?=$kulCek['username'];?>/settings/interest">İlgi Alanlarım</a></li>
                <li class="active"><i class="icon ion-ios-settings"></i><a href="<?=$kulCek['username'];?>/settings/account">Hesap Ayarlarım</a></li>
                <li><i class="icon ion-ios-locked-outline"></i><a href="<?=$kulCek['username'];?>/settings/password">Şifremi Değiştir</a></li>
              </ul>
            </div>
            <div class="col-md-7">

              <!-- Basic Information
              ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-settings"></i>Hesap Ayarlarım</h4>
                  <div class="line"></div>
                  <p>Hesap ve Gizlilik Ayarlarınızı bu sayfadan güncelleyebilirsiniz.</p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <div class="settings-block">
                    <div class="row">
                      <div class="col-sm-9">
                        <div class="switch-description">
                          <div><strong>Beni Takip Edebilirler</strong></div>
                          <p>Enable this if you want people to follow you</p>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="toggle-switch">
                          <label class="switch">
                            <input id="takip" type="checkbox" <?php if($sesCek['takip']=='E') { echo 'checked'; } ?>>
                            <span class="slider round"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="line"></div>
                  <div class="settings-block">
                    <div class="row">
                      <div class="col-sm-9">
                        <div class="switch-description">
                          <div><strong>Bildirimler</strong></div>
                          <p>Send me notification emails my friends like, share or message me</p>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="toggle-switch">
                          <label class="switch">
                            <input id="bildirimler" type="checkbox" <?php if($sesCek['bildirimler']=='E') { echo 'checked'; } ?>>
                            <span class="slider round"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="line"></div>
                  <div class="settings-block">
                    <div class="row">
                      <div class="col-sm-9">
                        <div class="switch-description">
                          <div><strong>Mesajlar</strong></div>
                          <p>Send me messages to my cell phone</p>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="toggle-switch">
                          <label class="switch">
                            <input id="mesajlar" type="checkbox" <?php if($sesCek['mesajlar']=='E') { echo 'checked'; } ?>>
                            <span class="slider round"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="line"></div>
                  <div class="settings-block">
                    <div class="row">
                      <div class="col-sm-9">
                        <div class="switch-description">
                          <div><strong>Etiketleme</strong></div>
                          <p>Enable my friends to tag me on their posts</p>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="toggle-switch">
                          <label class="switch">
                            <input id="etiket" type="checkbox" <?php if($sesCek['etiket']=='E') { echo 'checked'; } ?>>
                            <span class="slider round"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="line"></div>
                  <div class="settings-block">
                    <div class="row">
                      <div class="col-sm-9">
                        <div class="switch-description">
                          <div><strong>Bildirim Sesi</strong></div>
                          <p>You'll hear notification sound when someone sends you a private message</p>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="toggle-switch">
                          <label class="switch">
                            <input id="bildirimSes" type="checkbox" <?php if($sesCek['bildirimSes']=='E') { echo 'checked'; } ?>>
                            <span class="slider round"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div> <button onclick="accChange()" class="btn btn-primary">Hesap Ayarlarımı Güncelle</button>
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
          accChangee = function (takip,bildirimler,mesajlar,etiket,bildirimSes)
          {
          var degerler ='takip='+takip+'&bildirimler='+bildirimler+'&mesajlar='+mesajlar+'&etiket='+etiket+'&bildirimSes='+bildirimSes;
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
  
  var takip=document.getElementById("takip").checked;
  var bildirimler=document.getElementById("bildirimler").checked;
  var mesajlar=document.getElementById("mesajlar").checked;
  var etiket=document.getElementById("etiket").checked;
  var bildirimSes=document.getElementById("bildirimSes").checked;
  

  accChangee(takip,bildirimler,mesajlar,etiket,bildirimSes);
  

}

</script>