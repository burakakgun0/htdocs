	
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
	

	window.onload = function(){ 	
   
	headermesajGetir();

}
function bildirimCe()
{
	bildirimCek();
	
}
	setInterval(function(){ headermesajGetir() }, 3000);

	