
$(document).ready(function(){
          accChangee = function (oldpw,pw1,pw2)
          {
          var degerler ='oldpw='+oldpw+'&pw1='+pw1+'&pw2='+pw2;
          console.log(degerler);
          $.ajax({
          type: "POST", 
          url: "config/changeAcc.php", 
          data : degerler,
          success: function(data) {
          
          if(data=="Okey")
          {
          alert("De�i�iklik ba�ar�l�");
          }else if(data=='No') {
  alert("�ifreniz Yanl��");
}
          }
          });
          }
          });

    function accChange()
{
  
  var oldpw=document.getElementById("oldpw").value;
  var pw1=document.getElementById("pw1").value;
  var pw2=document.getElementById("pw2").value;
  
if(pw1!=pw2)
{
  alert("Girilen �ifreler E�le�miyor");
} 
else
{
  accChangee(oldpw,pw1,pw2);
  
}
  
  

}
