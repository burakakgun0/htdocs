  $(document).ready(function(){
          register = function (name,surname,pw,email,erkekmi,kadinmi,phone,sehir)
          {
          var degerler ='name='+name+'&surname='+surname+'&pw='+pw+'&email='+email+'&erkekmi='+erkekmi+'&kadinmi='+kadinmi+'&phone='+phone+'&sehir='+sehir;
          console.log(degerler);
          $.ajax({
          type: "POST", 
          url: "config/kayit.php", 
          data : degerler,
          success: function(data) {
          console.log(data);
          if(data=="Hata")
          {
          alert("Hata oluþtu");
          }
          else if(data=="Hat")
          {
          alert("Telefon Veya Email ile önceden kayit açýlmýþ");
          }
          else if(data=="Okey")
          {
          window.location.href = 'newsfeed.php';
          }
          }
          });
          }
          });

                                             
function kayitOl()
{
	
	var name=document.getElementById("firstname").value;
	var surName=document.getElementById("lastname").value;
	var pw=document.getElementById("password").value;
		var pwAgain=document.getElementById("passwordd").value;
	var email=document.getElementById("email").value;
	var erkekmi=document.getElementById("erkek").checked;
	var kadinmi=document.getElementById("kadin").checked;			
	var phone=document.getElementById("phone").value;	
var e = document.getElementById("country");
var sehir = e.options[e.selectedIndex].text;

if(pw!=pwAgain)
{
	alert("Girilen Þifreler Eþleþmiyor");
}
else
{
	register(name,surName,pw,email,erkekmi,kadinmi,phone,sehir);
	
}

}
                 


                                     
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
																	alert("Hata oluþtu");
																}
																else if(data=="Hat")
																{
																	alert("Telefon Veya Email ile önceden kayit açýlmýþ");
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
	
	var id=document.getElementById("mail").value;
	var pw=document.getElementById("pw").value;
			console.log(id);
			console.log(pw);
	var s= Likefunction(id,pw);
	
}


                                 

            