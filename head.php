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



?>






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