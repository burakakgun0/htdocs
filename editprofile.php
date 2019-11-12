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
              	<li class="active"><i class="icon ion-ios-information-outline"></i><a href="<?=$kulCek['username'];?>/settings">Hakkımda</a></li>
              	<li><i class="icon ion-ios-briefcase-outline"></i><a href="<?=$kulCek['username'];?>/settings/work">İş</a></li>
              	<li><i class="icon ion-ios-heart-outline"></i><a href="<?=$kulCek['username'];?>/settings/interest">İlgi Alanlarım</a></li>
                <li><i class="icon ion-ios-settings"></i><a href="<?=$kulCek['username'];?>/settings/account">Hesap Ayarlarım</a></li>
              	<li><i class="icon ion-ios-locked-outline"></i><a href="<?=$kulCek['username'];?>/settings/password">Şifremi Değiştir</a></li>
              </ul>
            </div>
            <div class="col-md-7">

              <!-- Basic Information
              ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-android-checkmark-circle"></i>Hakkımda Düzenle</h4>
                  <div class="line"></div>
                  <p>Bilgilerinizi bu sayfa ile güncelleyebilirsiniz.</p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                 
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="firstname">Ad</label>
                        <input id="firstname" class="form-control input-group-lg" type="text"  title="Enter first name" placeholder="First name" value="<?=$sesCek['name']; ?>" />
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="lastname" class="">Soyad</label>
                        <input id="lastname" class="form-control input-group-lg" type="text"  title="Enter last name" placeholder="Last name" value="<?=$sesCek['surname']; ?>" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="email">E-Posta</label>
                        <input id="email" class="form-control input-group-lg" type="text"  title="Enter Email" placeholder="My Email" value="<?=$sesCek['email']; ?>" />
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="tel" class="">Telefon</label>
                        <input id="phone" class="form-control input-group-lg" type="text"  title="Enter last name" placeholder="Last name" value="<?=$sesCek['telefon']; ?>" />
                      </div>
                    </div>
                    
                  
                    <div class="form-group gender">
                      <span class="custom-label"><strong>Cinsiyet </strong></span>
                      <label class="radio-inline">
                        <input id="erkek" type="radio" name="optradio" <?php if($sesCek['cinsiyet']=='E') { echo 'checked'; } ?>>Erkek
                      </label>
                      <label class="radio-inline">
                        <input id="kadin" type="radio" name="optradio" <?php if($sesCek['cinsiyet']=='K') { echo 'checked'; } ?>>Kadın
                      </label>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="city"> Kullanıcı Adı</label>
                        <input id="acc" class="form-control input-group-lg" type="text"  title="Enter city" placeholder="Your city" value="<?=$sesCek['username']; ?>"/>
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="country">Bulunduğum İl</label>
                        <select class="form-control" id="country">
                          <option><?=$sesCek['sehir']; ?></option>
                          <option value="1">Adana</option>
                          <option value="2">Adıyaman</option>
                          <option value="3">Afyonkarahisar</option>
                          <option value="4">Ağrı</option>
                          <option value="5">Amasya</option>
                          <option value="6">Ankara</option>
                          <option value="7">Antalya</option>
                          <option value="8">Artvin</option>
                          <option value="9">Aydın</option>
                          <option value="10">Balıkesir</option>
                          <option value="11">Bilecik</option>
                          <option value="12">Bingöl</option>
                          <option value="13">Bitlis</option>
                          <option value="14">Bolu</option>
                          <option value="15">Burdur</option>
                          <option value="16">Bursa</option>
                          <option value="17">Çanakkale</option>
                          <option value="18">Çankırı</option>
                          <option value="19">Çorum</option>
                          <option value="20">Denizli</option>
                          <option value="21">Diyarbakır</option>
                          <option value="22">Edirne</option>
                          <option value="23">Elazığ</option>
                          <option value="24">Erzincan</option>
                          <option value="25">Erzurum</option>
                          <option value="26">Eskişehir</option>
                          <option value="27">Gaziantep</option>
                          <option value="28">Giresun</option>
                          <option value="29">Gümüşhane</option>
                          <option value="30">Hakkâri</option>
                          <option value="31">Hatay</option>
                          <option value="32">Isparta</option>
                          <option value="33">Mersin</option>
                          <option value="34">İstanbul</option>
                          <option value="35">İzmir</option>
                          <option value="36">Kars</option>
                          <option value="37">Kastamonu</option>
                          <option value="38">Kayseri</option>
                          <option value="39">Kırklareli</option>
                          <option value="40">Kırşehir</option>
                          <option value="41">Kocaeli</option>
                          <option value="42">Konya</option>
                          <option value="43">Kütahya</option>
                          <option value="44">Malatya</option>
                          <option value="45">Manisa</option>
                          <option value="46">Kahramanmaraş</option>
                          <option value="47">Mardin</option>
                          <option value="48">Muğla</option>
                          <option value="49">Muş</option>
                          <option value="50">Nevşehir</option>
                          <option value="51">Niğde</option>
                          <option value="52">Ordu</option>
                          <option value="53">Rize</option>
                          <option value="54">Sakarya</option>
                          <option value="55">Samsun</option>
                          <option value="56">Siirt</option>
                          <option value="57">Sinop</option>
                          <option value="58">Sivas</option>
                          <option value="59">Tekirdağ</option>
                          <option value="60">Tokat</option>
                          <option value="61">Trabzon</option>
                          <option value="62">Tunceli</option>
                          <option value="63">Şanlıurfa</option>
                          <option value="64">Uşak</option>
                          <option value="65">Van</option>
                          <option value="66">Yozgat</option>
                          <option value="67">Zonguldak</option>
                          <option value="68">Aksaray</option>
                          <option value="69">Bayburt</option>
                          <option value="70">Karaman</option>
                          <option value="71">Kırıkkale</option>
                          <option value="72">Batman</option>
                          <option value="73">Şırnak</option>
                          <option value="74">Bartın</option>
                          <option value="75">Ardahan</option>
                          <option value="76">Iğdır</option>
                          <option value="77">Yalova</option>
                          <option value="78">Karabük</option>
                          <option value="79">Kilis</option>
                          <option value="80">Osmaniye</option>
                          <option value="81">Düzce</option>
          
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-info">Hakkımda</label>
                        <textarea id="profile_string" name="information" class="form-control" placeholder="Bir şeyler yaz..." rows="4" cols="400"><?=$sesCek['profile_string']; ?></textarea>
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
          accChangee = function (name,surname,username,email,erkekmi,kadinmi,phone,sehir,profile_string)
          {
          var degerler ='name='+name+'&surname='+surname+'&acc='+username+'&email='+email+'&erkekmi='+erkekmi+'&kadinmi='+kadinmi+'&phone='+phone+'&sehir='+sehir+'&profile_string='+profile_string;
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
  
  var name=document.getElementById("firstname").value;
  var username=document.getElementById("acc").value;
  var surName=document.getElementById("lastname").value;
  var email=document.getElementById("email").value;
  var erkekmi=document.getElementById("erkek").checked;
  var kadinmi=document.getElementById("kadin").checked;     
  var phone=document.getElementById("phone").value; 
  var e = document.getElementById("country");
  var sehir = e.options[e.selectedIndex].text;
  var profile_string=document.getElementById("profile_string").value; 

  accChangee(name,surName,username,email,erkekmi,kadinmi,phone,sehir,profile_string);
  

}

</script>