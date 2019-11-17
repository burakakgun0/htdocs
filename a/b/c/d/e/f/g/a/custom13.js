
$(document).ready(function(){
          accChangee = function (ilgi)
          {
          var degerler ='ilgi='+ilgi;
          console.log(degerler);
          $.ajax({
          type: "POST", 
          url: "config/changeAcc.php", 
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

    function accChange()
{
  
  var ilgi=document.getElementById("ilgi").value;
 
  

  accChangee(ilgi);
  

}