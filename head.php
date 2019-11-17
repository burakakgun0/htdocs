<?php
ob_start();
session_start();
include 'config/config.php'; 

if(!isset($_SESSION['id']))
{
	header("location:index.php");
	exit;
}

include 'config/seo.php'; 

$sesID=$_SESSION['id'];
$ses=$db->query("SELECT * FROM `user` WHERE id='$sesID'");
$sesCek=$ses->fetch(PDO::FETCH_ASSOC);

		$bc=getDatetimeNow();


		$facea=$db->prepare("UPDATE `user` SET `last_active`='$bc' WHERE id='$sesID'")->execute();
		
					
				

		
function getDatetimeNow() {
    $tz_object = new DateTimeZone('Europe/Istanbul');
    $datetime = new DateTime();
    $datetime->setTimezone($tz_object);
    return $datetime->format('Y\-m\-d\ H:i:s');
}
						

?>






<!DOCTYPE html>
<html lang="tr">
	

<head>
	<base href="/">
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

	<style type="text/css">
                    @media only screen and (min-width: 621px) {
                    .bottom {
                      margin-top: 3.3%;
                    }
                  }
                    @media only screen and (max-width: 620px) {
                    .bottom {
                      margin-top: 3.2%;
                    }
                  }

                   @media only screen and (max-width: 600px) {
                    .bottom {
                      margin-top: 3%;
                    }
                  }

                  @media only screen and (max-width: 500px) {
                    .bottom {
                      margin-top: -14%;
                    }
                  }

                  </style>