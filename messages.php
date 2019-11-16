
<?php
include 'head.php';
$userId=$_SESSION['id'];
			
  

?>
  <body  >

    <!-- Header -->
   <header id="header">
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
            <a class="navbar-brand" href="index"><img src="../images/logo.png" alt="logo" /></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
              <li class="dropdown"><a href="newsfeed">Anasayfa</a></li>
               
   <li class="dropdown">
                <a href="#" class="dropdown-toggle" onClick="bildirimCe()" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><div  class="pull-right"><span id="bildirimler" class="label label-danger">1</span></div> Bildirimler &nbsp;<span></span></a>
                <ul  class="dropdown-menu login">
                 <li id="bildirimDrop">
			


                 </li>

                </ul>


              </li>
              <li class="dropdown"><a href="messages">Mesajlar &nbsp;<div   class="pull-right"><span id="mesaj"  class="label label-danger">1</span></div></a></li>
              <li class="dropdown"><a href="group">Gruplar</a></li>

              <li class="dropdown"><a href="<?=$sesCek['username'] ?>"><img style="width: 30px; height: 30px; float: left; margin-right: 5px;" src="../images/users/user-2.jpg" alt="user" class="img-responsive profile-photo">  <?=$sesCek['name'] ?></a></li>
              
              
            </ul>
            <form class="navbar-form navbar-right hidden-sm">
              <div class="form-group">
                <i class="icon ion-android-search"></i>
                <input type="text" class="form-control" placeholder="Arkadaş, fotoğraf, video">
              </div>
            </form>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
	
		<script>
		


	
	</script>

    <!-- Scripts
    ================================================= -->


    <!--Header End-->

    <div id="page-contents" >
    	<div class="container">
    		<div class="row">

    			<!-- Newsfeed Common Side Bar Left
          ================================================= -->
    			<?php include 'userside.php'; ?>
    			<div class="col-md-7">

        
            <div class="create-post">
            	<h4 class="grey">Mesajlar<a href=""><div  class="pull-right"><span class="label label-primary">Mesaj At</span></div></a></h4>
            </div>

            <!-- Chat Room
            ================================================= -->
            <div class="chat-room" onload="baslikCek()" >
              <div  class="row">
			
                <div class="col-md-5">

                  <!-- Contact List in Left-->
                  <ul id="dd"  class="nav nav-tabs contact-list scrollbar-wrapper scrollbar-outer">
				  
                  </ul><!--Contact List in Left End-->

                </div>
                <div class="col-md-7">

                  <!--Chat Messages in Right-->
                  <div id="asd" class="tab-content scrollbar-wrapper wrapper scrollbar-outer">
			

						
                
                  </div><!--Chat Messages in Right End-->
						<div id="msgbox">
						</div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
										
    			<!-- Newsfeed Common Side Bar Right
          ================================================= -->
    		<?php include 'rightbar.php'; ?>
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
    
	<script src="a\b\c\d\e\f\g\a\custom5.js"></script>

    <!-- Scripts
    ================================================= -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/script.js"></script>

  </body>

</html>
