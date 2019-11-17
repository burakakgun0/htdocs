<!DOCTYPE html>
<html lang="tr">
  

<head>
  <base href="/">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is social network html5 template available in themeforest......" />
    <meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
    <meta name="robots" content="index, follow" />
    <title>Sosyal Medya Projesi</title>

    <!-- Stylesheets
    ================================================= -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/jquery.scrollbar.css" />
    <link href="css/emoji.css" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
  </head>
	<body>

    <!-- Header
    ================================================= -->
		<header id="header" >
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index"><img src="images/logo.png" alt="logo" /></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
              <li class="dropdown"><a href="index">Anasayfa</a></li>
               <li class="dropdown"><a href="register">Kayıt Ol</a></li>
            </ul>
            <form class="navbar-form navbar-right hidden-sm">
              <div style="margin-right: 250px" class="form-group">
                <i class="icon ion-android-search"></i>
                <input type="text" class="form-control" placeholder="Arkadaş, fotoğraf, video">
              </div>
            </form>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->
    
    <!-- Landing Page Contents
    ================================================= -->
    <div id="lp-register">
    	<div class="container wrapper">
        <div class="row">
        	<div class="col-sm-5">
            <div class="intro-texts">
            	<h1 class="text-white">Arkadas Edin !</h1>
            	<p>XXXX, insanları bağlamak için kullanılabilecek bir sosyal ağ şablonu. Şablon açılış sayfaları, Haber akışı, Resim / Video Paylaşımı, Sohbet Kutusu, Zaman Tüneli ve daha fazlasını sunar. <br /> <br /></p>
              <button class="btn btn-primary">Neden bekliyorsun ? </button>
            </div>
          </div>
        	<div class="col-sm-6 col-sm-offset-1">
            <div class="reg-form-container"> 
            
              <!-- Register/Login Tabs-->
              <div class="reg-options">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#register" data-toggle="tab">Kayıt Ol</a></li>
                  <li><a href="#login" data-toggle="tab">Giriş Yap</a></li>
                </ul><!--Tabs End-->
              </div>
              
              <!--Registration Form Contents-->
              <div class="tab-content">
                <div class="tab-pane active" id="register">
                  <h3>Kayıt Ol !</h3>
                  <p class="text-muted">Bugün katılın. Milyonlarca kişiyle tanışın, ilan verin</p>
                  
                  <!--Register Form-->
                  <form  class="form-inline">
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="firstname" class="sr-only">Adınız</label>
                        <input id="firstname" class="form-control input-group-lg" type="text" name="firstname" title="Enter first name" placeholder="Adınız"/>
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="lastname" class="sr-only">Soyadınız</label>
                        <input id="lastname" class="form-control input-group-lg" type="text" name="lastname" title="Enter last name" placeholder="Soyadınız"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="email" class="sr-only">E-Posta</label>
                        <input id="email" class="form-control input-group-lg" type="text" name="Email" title="Enter Email" placeholder="E-Postanız"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="password" class="sr-only">Şifre</label>
                        <input id="password" class="form-control input-group-lg" type="password" name="password" title="Şifre" placeholder="Şifre"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="password" class="sr-only">Şifre (Tekrar)</label>
                        <input id="passwordd" class="form-control input-group-lg" type="password" name="password" title="Şifre (Tekrar)" placeholder="Şifre (Tekrar)"/>
                      </div>
                    </div>
                   
                    <div class="form-group gender">
                      <label class="radio-inline">
                        <input id="erkek" type="radio" name="optradio" checked>Erkek
                      </label>
                      <label class="radio-inline">
                        <input id="kadin" type="radio" name="optradio">Kadın
                      </label>
                    </div>
					 <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="phone" class="sr-only">Telefon</label>
                        <input id="phone" class="form-control input-group-lg" type="text" name="phone" title="Enter Phone" placeholder="Telefon Numaranız"/>
                      </div>
                    </div>
                    <div class="row">
                      
                      <div class="form-group col-xs-6">
                        <label for="country" class="sr-only"></label>
                        <select class="form-control" id="country">
                          <option value="country" disabled selected>Şehriniz</option>
                        
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
                  </form><!--Register Now Form Ends-->
                  <p><a href="#login" data-toggle="tab">Zaten bir hesabınız var mı ?</a></p>
                  <button class="btn btn-primary" onClick="kayitOl()">Kayıt Ol</button>
                </div><!--Registration Form Contents Ends-->
                
                <!--Login-->
                <div class="tab-pane" id="login">
                  <h3>Giriş Yap</h3>
                  <p class="text-muted">Hesabına Giriş Yap</p>
                  
                  <!--Login Form-->
                  <form name="Login_form" id='Login_form'>
                     <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-email" class="sr-only">E-Posta</label>
                        <input id="mail" class="form-control input-group-lg" type="text" name="Email" title="E-Postanız" placeholder="E-Postanız"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-password" class="sr-only">Şifre</label>
                        <input id="pw" class="form-control input-group-lg" type="password" name="password" title="Şifreniz" placeholder="Şifreniz"/>
                      </div>
                    </div>
                  </form><!--Login Form Ends--> 
                  <p><a href="#">Şifremi Unuttum ?</a></p>
                  <button onclick="girisYap()" class="btn btn-primary">Giriş Yap</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-sm-offset-6">
          
            <!--Social Icons-->
            <ul class="list-inline social-icons">
              <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
              <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
              <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
              <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
              <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>
    
<script type="text/javascript" src="a\b\c\d\e\f\g\a\custom15.js">
        

  
                                        </script>

    <!-- Scripts
    ================================================= -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.appear.min.js"></script>
		<script src="js/jquery.incremental-counter.js"></script>
    <script src="js/script.js"></script>
    
	</body>

</html>
