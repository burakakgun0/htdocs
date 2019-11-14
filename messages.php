
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
    
	<script>
	  $(document).ready(function(){
                                                mesajGetir = function (userId)
                                                {
                                                    var degerler = 'userId='+ userId ;
													//console.log(degerler);
													var divEsitle="";
													var cx;
													var abc;
                                                                $.ajax({
                                                                type: "POST", 
                                                                url: "config/mesajCek.php", 
                                                                data : degerler,
																
                                                                success:function(data){
																	abc = JSON.parse(data);
																	console.log(abc);
																			
																			divEsitle='<div class="tab-pane active" id="contact'+userId+'">        <div class="chat-body" >      <ul id="msg'+userId+'" class="chat-message">	';
																	for(var i=abc.length-1;i>=0;i--)
																	{
																		
																		if(userId==abc[i].gonderenId)
																		{
																			//console.log("asd");
																			divEsitle+='<li class="left"> <img src="images/users/user-2.jpg" alt="" class="profile-photo-sm pull-left" /><div class="chat-item"><div class="chat-item-header"> <h5>'+abc[i].mesajAtan+'</h5><small class="text-muted">'+abc[i].nekadaronce+'</small> </div> <p>'+abc[i].mesaj+'</p> </div>	</li>';			
																		}																			
																		else
																		{
																			//console.log("dxs");
																			divEsitle+='<li class="right"> <img src="images/users/user-2.jpg" alt="" class="profile-photo-sm pull-right" /><div class="chat-item"><div class="chat-item-header"> <h5>'+abc[i].mesajAtan+'</h5><small class="text-muted">'+abc[i].nekadaronce+'</small> </div> <p>'+abc[i].mesaj+'</p> </div>	</li>';																	
																	cx=abc[i].gonderenId;
																		}
																	}
																//	console.log(divEsitle);
																	divEsitle+='</ul><div id="mesajbox'+userId+'">	</div>   </div> </div>';
																		$("#asd").html(divEsitle);
																
																
															
                                                            }

                                                        });
	
                                                }
												//mesaj at
												   mesajCek = function (userId,mesaj)
                                                {
                                                    var degerler = 'userId='+ userId +'&mesaj='+mesaj;
													//console.log(degerler);
													var divEsitle="";
													var cx;
                                                                $.ajax({
                                                                type: "POST", 
                                                                url: "config/mesajGonder.php", 
                                                                data : degerler,
																
                                                                success:function(data){
																	//console.log(data);
																	
                                                            }

                                                        });
	
                                                }
												//mesaj baslik çek
													   mesajBaslikCek = function ()
                                                {
                                                    var degerler = '';
													var yeniDizi;
													//console.log(degerler);
													var divEsitle="";
													//var cx;
                                                                $.ajax({
                                                                type: "POST", 
                                                                url: "config/mesajBaslikCek.php", 
                                                                data : degerler,
																
                                                                success:function(data){
															
																	dizi = JSON.parse(data);
																			console.log(dizi[0].name);
																			
																	console.log(dizi[0]);
																	var datas="";
																	for(var i=0;i<dizi.length;i++)
																	{
																		if(datas.length == 0)
																		{
																			datas="leng="+dizi.length+"&deger"+i+"="+dizi[i].gonderenId;
																			
																		}
																		else
																		{
																			datas+="&deger"+i+"="+dizi[i].gonderenId;
																		}
																	}
																	console.log(datas +" asd");
																	   $.ajax({
																			type: "post",
																			url: "config/mesajBaslikIcerik.php",
																			data: datas,
																			success: function (data) {
																					yeniDizi = JSON.parse(data);
																					console.log(yeniDizi + " asd");
																						for(var i=dizi.length-1;i>=0;i--)
																	{
																		
																	//console.log("asd");
																	var abc="";
																	if(yeniDizi[i].okundumu==0)
																	{
																		abc="Yeni Mesaj";
																	}
																	else
																	{
																		abc="";
																	}
																	divEsitle+=' <li > <a onClick="mesajYukle('+dizi[i].gonderenId+')" href="#contact'+dizi[i].gonderenId+'"  data-toggle="tab"><div class="contact"><img src="'+dizi[i].path+'"  alt="" class="profile-photo-sm pull-left"/>	<div class="msg-preview">    <h6> '+dizi[i].name +" "+dizi[i].surname+'</h6> 	<p class="text-muted">'+yeniDizi[i].mesaj+'</p>  <small class="text-muted">'+yeniDizi[i].nekadaronce+'  </small>        <div class="chat-alert">'+abc+'	</div>  	</div>   </div>   </a>      </li>';			
																		
																		
																	}
																		$("#dd").html(divEsitle);
																}
																		});
																
																	
                                                            }

                                                        });
	
                                                }
                                             });
	var activeDlg=0;
	
	 function updateScroll() {
            var element = document.getElementById("asd");
            element.scrollTop = element.scrollHeight;
    }



	
	function mesajYukle(id)
	{
		if(id!=0)
		{
			
		
	
		if(activeDlg!=id)
		{
			var z='					    <div class="send-message">                    <div class="input-group" style>                      <input id="to'+id+'" type="text" class="form-control" placeholder="Type your message">                      <span class="input-group-btn">                        <button onClick="msjAt('+id+')" id="go'+id+'" class="btn btn-default" type="button">Send</button>                      </span>                    </div>                  </div>';		
	
			document.getElementById("msgbox").innerHTML=z;
			updateScroll();
		}
		
		
		var s =mesajGetir(id);
		activeDlg=id;
		}
	}
	
	function msjAt(id)
	{
		//var s =mesajAt(id);
		var a =document.getElementById("to"+id).value;
		var s =mesajCek(id,a);
		var s =mesajGetir(id);
			updateScroll();
		/*
		var objDiv = document.getElementById("asd");
objDiv.scrollTop = objDiv.scrollHeight;
*/
	}
	
	window.onload = function(){ 
    console.log("window.onload"); 
	baslikCek();
	headermesajGetir();
	

}

function baslikCek()
{
	mesajBaslikCek();
}
	  $(document).ready(function(){
                                                headermesajGetir = function ()
                                                {
													var msg="";
													var bild="";
													var degerler="";
                                                                $.ajax({
                                                                type: "POST", 
                                                                url: "config/mesajVeBildirimSayiCek.php", 
                                                                data : degerler,																
                                                                success:function(data){
																
																	abc = JSON.parse(data);
																				console.log(abc);																
																	msg=abc[0].mesaj;
																		bild=abc[0].bildirim;
																		$("#bildirimler").html(bild);
																		$("#mesaj").html(msg);
                                                            }

                                                        });
	
                                                }
												          bildirimCek = function ()
                                                {
													var msg="";
													var bild="";
													var degerler="";
													var czx="";
                                                                $.ajax({
                                                                type: "POST", 
                                                                url: "config/bildirimCek.php", 
                                                                data : degerler,																
                                                                success:function(data){
																
																	abc = JSON.parse(data);
																	console.log(abc);																
																	for(var i=0;i<abc.length;i++)
																	{
																		
																		
																	
																	czx+='<a><p>'+abc[i].name +'  '+abc[i].surname+ '  '+abc[i].message+'</p></a>';			
																		
																		
																		
																		
																	}
																	
																		$("#bildirimDrop").html(czx);
																		//$("#mesaj").html();
                                                            }

                                                        });
	
                                                }
												//mesaj at
												  
                                             });
	


function bildirimCe()
{
	bildirimCek();
	
}

	

	
	setInterval(function(){ mesajYukle(activeDlg) }, 5000);
	
	setInterval(function(){ baslikCek() }, 30000);
	
	</script>

    <!-- Scripts
    ================================================= -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/script.js"></script>

  </body>

</html>
