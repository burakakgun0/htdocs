          $(document).ready(function(){
          accChangee = function (name,surname,username,email,erkekmi,kadinmi,phone,sehir,profile_string)
          {
          var degerler ='name='+name+'&surname='+surname+'&acc='+username+'&email='+email+'&erkekmi='+erkekmi+'&kadinmi='+kadinmi+'&phone='+phone+'&sehir='+sehir+'&profile_string='+profile_string;
          console.log(degerler);
          $.ajax({
          type: "POST", 
          url: "config/changeAcc.php", 
          data : degerler,
          success: function(data) {
          
          if(data=="Okey")
          {
          alert("Değişiklik Başarılı");
          }
          }
          });
          }
          });

    function accChange()
{
  
  var name=document.getElementById("firstname").value;
  var username=document.getElementById("acc").value;
  var surName=document.getElementById("lastname").value;
  var email=document.getElementById("email").value;
  var erkekmi=document.getElementById("erkek").checked;
  var kadinmi=document.getElementById("kadin").checked;     
  var phone=document.getElementById("phone").value; 
  var e = document.getElementById("country");
  var sehir = e.options[e.selectedIndex].text;
  var profile_string=document.getElementById("profile_string").value; 

  accChangee(name,surName,username,email,erkekmi,kadinmi,phone,sehir,profile_string);
  

}
