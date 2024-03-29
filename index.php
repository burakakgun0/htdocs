<?php ob_start();
session_start();
include 'config/config.php'; 
include 'config/seo.php'; ?>

<!DOCTYPE html>
<html lang="tr">
	

<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="KralPenguen.com Sosyal Paylaşım Sitesi.Hesap oluştur veya KralPenguen'e giriş yap. Arkadaşlarınla, akrabalarınla ve tanıdığın diğer kişilerle bağlantı kur. Fotoğraf ve videolar paylaş, mesaj at, ürün sat..." />
		<meta name="keywords" content="kral penguen, kralpenguen, kralpenguen.com, sosyal paylaşım, sosyal paylaşım sitesi, b5 yazılım, hayvanat bahçesi, fotoğraf paylaş, video paylaş, hayvan sat, hayvan satışı, kanatlı, penguen, kral penguen nedir?" />
		<meta name="robots" content="index, follow" />
		<title>Kral Penguen | Yeni Nesil Sosyal Paylaşım Sitesi</title>

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

<?php

if(isset($_SESSION['id']))
{
	header("location:newsfeed");
}
else
{
		$sql=$db->query("SELECT * FROM `user` ");
			$userCek=$sql->fetch(PDO::FETCH_ASSOC);
			$rows=$sql->rowCount();
			
			 $sql=$db->query("SELECT * FROM `post` where group_id is null ");
			$postCek=$sql->fetch(PDO::FETCH_ASSOC);
			$postRows=$sql->rowCount();
			
			 $sql=$db->query("SELECT * FROM `post` where group_id is not null ");
			$ilanCek=$sql->fetch(PDO::FETCH_ASSOC);
			$ilanRows=$sql->rowCount();
}
?>
	<body>

    <!-- Header
    ================================================= -->
	<?php include 'header.php'; ?>
    <!--Header End-->

    <!-- Top Banner
    ================================================= -->
		<section id="banner">
			<div class="container">

        <!-- Sign Up Form
        ================================================= -->
		<script>
		
		</script>
        <div class="sign-up-form">
					<a href="index.php" class="logo"><img src="images/logo.png"/></a>
					<h2 class="text-white">Giris Yap</h2>
					<div class="line-divider"></div>
					<div class="form-wrapper">
						<p class="signup-text">Şimdi giriş yap ve dünyanın her yerindeki harika insanlarla tanışın</p>
						<form >
							<fieldset class="form-group">
								<input type="email" class="form-control" id="email" placeholder="E-Postanızı Giriniz">
							</fieldset>
							<fieldset class="form-group">
								<input type="password" class="form-control" id="password" placeholder="Şifrenizi Giriniz">
							</fieldset>
						
						<button type='submit' class="btn-secondary" onclick="girisYap();">Giriş Yap</button>
						</form>
					</div>
					<a href="register.php">Üyeliğiniz yok mu ?</a>
					<img class="form-shadow" src="images/bottom-shadow.png" alt="" />
				</div><!-- Sign Up Form End -->

        <svg class="arrows hidden-xs hidden-sm">
          <path class="a1" d="M0 0 L30 32 L60 0"></path>
          <path class="a2" d="M0 20 L30 52 L60 20"></path>
          <path class="a3" d="M0 40 L30 72 L60 40"></path>
        </svg>
			</div>
		</section>

    <!-- Features Section
    ================================================= -->
		<section id="features">
			<div class="container wrapper">
				<h1 class="section-title slideDown">kral penguen</h1>
				<div class="row slideUp">
					<div class="feature-item col-md-2 col-sm-6 col-xs-6 col-md-offset-2">
						<div class="feature-icon"><i class="icon ion-person-add"></i></div>
						<h3>Arkadas Edin</h3>
					</div>
					<div class="feature-item col-md-2 col-sm-6 col-xs-6">
						<div class="feature-icon"><i class="icon ion-images"></i></div>
						<h3>Gönderi Paylas</h3>
					</div>
					<div class="feature-item col-md-2 col-sm-6 col-xs-6">
						<div class="feature-icon"><i class="icon ion-chatbox-working"></i></div>
						<h3>Sohbet Et</h3>
					</div>
					<div class="feature-item col-md-2 col-sm-6 col-xs-6">
						<div class="feature-icon"><i class="icon ion-compose"></i></div>
						<h3>Ilan ver</h3>
					</div>
				</div>
				<h2 class="sub-title">kitlemiz</h2>
				<div id="incremental-counter" data-value='<?php echo $rows ?>'></div>
				
				
			</div>

		</section>

    <!-- Download Section
    ================================================= -->
		<section id="app-download">
			<div class="container wrapper">
				<h1 class="section-title slideDown">indir</h1>
				<ul class="app-btn list-inline slideUp">
					<li><button class="btn-secondary"><img src="images/app-store.png" alt="App Store" /></button></li>
					<li><button class="btn-secondary"><img src="images/google-play.png" alt="Google Play" /></button></li>
				</ul>
				<h2 class="sub-title">her zaman, her yerde baglantıda kalın</h2>
				<img src="images/iPhone.png" alt="iPhone" class="img-responsive" />
			</div>
		</section>

    <!-- Image Divider
    ================================================= -->
    <div class="img-divider hidden-sm hidden-xs"></div>

    <!-- Facts Section
    ================================================= -->
		<section id="site-facts">
			<div class="container wrapper">
				<div class="circle">
					<ul class="facts-list">
						<li>
							<div class="fact-icon"><i class="icon ion-ios-people-outline"></i></div>
							<h3 class="text-white"><?php echo $rows ?></h3>
							<p>Kayıtlı Kullanıcı</p>
						</li>
						<li>
							<div class="fact-icon"><i class="icon ion-images"></i></div>
							<h3 class="text-white"><?php echo $postRows ?></h3>
							<p>Gönderi Paylaşımı</p>
						</li>
						<li>
							<div class="fact-icon"><i class="icon ion-checkmark-round"></i></div>
							<h3 class="text-white"><?php echo $ilanRows ?></h3>
							<p>İlan Paylaşımı</p>
						</li>
					</ul>
				</div>
			</div>
		</section>
<br>
    <!-- Live Feed Section
    ================================================= -->
		

    <!-- Footer
    ================================================= -->
	 <?php include 'footer.php'; ?>

    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>
    

<script type="text/javascript" src="a\b\c\d\e\f\g\a\custom16.js"></script>

    <!-- Scripts
    ================================================= -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.appear.min.js"></script>

		<script src="js/jquery.incremental-counter.js"></script>
    <script src="js/script.js"></script>
    
	</body>

</html>
