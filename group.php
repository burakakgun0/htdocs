<?php include 'head.php';

$group=$db->query("SELECT * FROM `facegroup`");
 



?>
  <body>

    <!-- Header
    ================================================= -->
		<?php include 'header2.php'; ?>
    <!--Header End-->

    <div id="page-contents">
    	<div class="container">
    		<div class="row">

          <!-- Newsfeed Common Side Bar Left
          ================================================= -->
    		<?php include 'userside.php'; ?>
    			<div class="col-md-7">
            <div class="create-post">
              <h4 class="grey">Gruplar<a href="newgroup"><div  class="pull-right"><span class="label label-primary">Yeni Grup Kur</span></div></a></h4>
            </div>
            <!-- Post Create Box
            ================================================= -->
            <!-- Friend List
            ================================================= -->
            <div class="friend-list">
            	<div class="row">
                <?php while($groups=$group->fetch(PDO::FETCH_ASSOC)) { ?>
            		<div class="col-md-6 col-sm-6">
                  <div class="friend-card">
                  	<img src="<?=$groups['bg_path'] ?>" alt="profile-cover" class="img-responsive cover" />
                  	<div class="card-info">
                      <img src="<?=$groups['path'] ?>" alt="user" class="profile-photo-lg" />
                      <div class="friend-info">
                        <a  class="pull-right text-green"><?php $gRoupId=$groups['id']; $groupSessionId=$sesCek['id'];  $groupTa=$db->query("SELECT * FROM `facegroup_users` WHERE user_id='$groupSessionId' and group_id='$gRoupId'");
                    $groupsTa=$groupTa->rowCount(); if($groupsTa!=0) { echo 'Gruptasın'; } else {}  ?></a>
                      	<h5><a href="<?=$groups['seo'] ?>/group" class="profile-link"><?=$groups['name'] ?></a></h5>
                      	<p>Kurucu : <?php $owner=$groups['owner_user_id'];
                              $groupOwn=$db->query("SELECT * FROM `user` WHERE 1");
                              $groupOwner=$groupOwn->fetch(PDO::FETCH_ASSOC);
                              echo $groupOwner['name'].' '.$groupOwner['surname'];

                         ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
            		
            	</div>
            </div>
        </div>

          <!-- Newsfeed Common Side Bar Right
          ================================================= -->
    		<?php include 'rightbar.php'; ?>
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
