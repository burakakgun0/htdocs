
<?php
include 'head.php';
$userId=$_SESSION['id'];
			
  

?>
  <body>

    <!-- Header -->
    <?php include 'header2.php' ?>
    <!--Header End-->

    <div id="page-contents">
    	<div class="container">
    		<div class="row">

    			<!-- Newsfeed Common Side Bar Left
          ================================================= -->
    			<?php include 'userside.php'; ?>
    			<div class="col-md-7">

        
            <div class="create-post">
            	<h4 class="grey">Mesajlar</h4>
            </div>

            <!-- Chat Room
            ================================================= -->
            <div class="chat-room">
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

	
		if(activeDlg!=id)
		{
			var z='					    <div class="send-message">                    <div class="input-group" style>                      <input id="to'+id+'" type="text" class="form-control" placeholder="Type your message">                      <span class="input-group-btn">                        <button onClick="msjAt('+id+')" id="go'+id+'" class="btn btn-default" type="button">Send</button>                      </span>                    </div>                  </div>';		
	
			document.getElementById("msgbox").innerHTML=z;
			updateScroll();
		}
		
		
		var s =mesajGetir(id);
		activeDlg=id;
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
	mesajBaslikCek();

}
function baslikCek()
{
	mesajBaslikCek();
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
