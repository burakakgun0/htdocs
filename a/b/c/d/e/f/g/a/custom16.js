             // veri sonras� input temizleme                                     
                                        // ajax yorum

                                            $(document).ready(function(){
                                                Likefunction = function (_postId, _userId)
                                                {
                                                    var degerler = 'id='+ _postId + '&pw='+_userId;
													console.log(degerler);
                                                                $.ajax({

                                                                type: "POST", 

                                                                url: "config/register.php", 

                                                                data : degerler, 

                                                                success:function(data){
																	console.log(data);
																if(data=="Hata")
																{
																	alert("Hata oluştu");
																}
																else if(data=="Hat")
																{
																	alert("Telefon Veya Email ile önceden kayit oluşturulmuş");
																}
																else if(data=="Okey")
																{
																	window.location.href = 'newsfeed.php';
																}

                                                            }

                                                        });

                                                }
                                             });

                                                // YORUM ARTTIRMA


function girisYap()
{
	
	var id=document.getElementById("email").value;
	var pw=document.getElementById("password").value;
			console.log(id);
			console.log(pw);
	var s= Likefunction(id,pw);
	
}
