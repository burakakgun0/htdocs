<div class="col-md-3 static">
            <div class="profile-card">
            	<img src="<?php if($sesCek['path']==null) { echo 'dimg/defaultavatar.png'; } else { echo $sesCek['path']; }  ?>" alt="user" class="profile-photo" />
            	<h5><a href="<?=$sesCek['username'] ?>" class="text-white"><?=$sesCek['name'].' '.$sesCek['surname']; ?></a></h5>
            	<!--<a href="#" class="text-white"><i class="ion ion-android-person-add"></i> 1,299 takipçi</a>-->
            </div><!--profile card ends-->
            <ul class="nav-news-feed">
              <li><i class="icon ion-ios-paper"></i><div><a href="newsfeed">Gönderi Akışı</a></div></li>
              <!--<li><i class="icon ion-ios-people"></i><div><a href="followers.php">Takipçiler</a></div></li>-->
              <!--<li><i class="icon ion-ios-people-outline"></i><div><a href="following.php">Takip Edilenler</a></div></li>-->
              <li><i class="icon ion-chatboxes"></i><div><a href="messages">Mesajlar</a></div></li>
              <li><i class="fa fa-group"></i><div><a href="mygroup">Gruplarım</a></div></li>
              <!--<li><i class="icon ion-images"></i><div><a href="newsfeed-images.html">Etiketlendiklerim</a></div></li>-->
              <!--<li><i class="icon ion-ios-videocam"></i><div><a href="newsfeed-videos.html">Videos</a></div></li>-->
              <li><i class="icon ion-ios-close"></i><div><a href="logout">Güvenli Çıkış</a></div></li>
            </ul><!--news-feed links ends-->
            <div id="chat-block">
              <div class="title">Aktif Kullanıcılar</div>
              <ul class="online-users list-inline">
			 <?php include 'aktifKullanicilar.php'; ?>
                       </ul>
            </div><!--chat block ends-->
          </div>