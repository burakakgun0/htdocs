<?php
include 'config/config.php'; 

if(!isset($_SESSION['id']))
{
	header("location:index.php");
	exit;
}


$userID=$_SESSION['id'];

$bc=getonBesDakikaOnce();
$aktif=$db->query("select * from user where last_active >'$bc' and id!='$userID'");



		

function getonBesDakikaOnce()
{date_default_timezone_set('Europe/Istanbul');
$date = date("Y-m-d H:i:s");
$time = strtotime($date);
$time = $time - (15 * 60);
$date = date("Y-m-d H:i:s", $time);
return $date;
}
						
while($aktifCek=$aktif->fetch(PDO::FETCH_ASSOC))
{
?>
 <li><a href="<?php echo $aktifCek['username'] ?>" title="<?php echo $aktifCek['name'] ?>"><img src="<?php echo $aktifCek['path'] ?>" alt="<?php echo $aktifCek['username'] ?>" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
 	<?php
}
?>
