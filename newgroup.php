<?php include 'head.php'; ?>
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
              <h4 class="grey">Yeni Grup Kur </h4>
            </div>
            <!-- Post Create Box
            ================================================= -->
            <!-- Friend List
            ================================================= -->
            <div class="col-md-12">

             <!-- Change Password
              ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  
                  <p>Bu sayfadan yeni grup oluşturabilirsiniz.</p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                 
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-password">Grup Adı</label>
                        <input id="name" class="form-control input-group-lg" type="text"  title="Grup Adı" placeholder="Grubunuzun Adı"/>
                      </div>
                    </div>
                  <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-info">Grup Açıklaması</label>
                        <textarea id="description" name="information" class="form-control" placeholder="Bir şeyler yaz..." rows="4" cols="400"></textarea>
                      </div>
                    </div>
                    <button onclick="createGroup()" class="btn btn-primary">Grup Oluştur</button>
              
                </div>
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
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTMXfmDn0VlqWIyoOxK8997L-amWbUPiQ&amp;callback=initMap"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/script.js"></script>
    <script>
  
          $(document).ready(function(){
          createGroupp = function (name,description)
          {
          var degerler ='name='+name+'&description='+description;
          console.log(degerler);
          $.ajax({
          type: "POST", 
          url: "config/creategroup.php", 
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

    function createGroup()
{
  
  var name=document.getElementById("name").value;
  var description=document.getElementById("description").value;
  

  createGroupp(name,description);
  

}

</script>
  </body>
