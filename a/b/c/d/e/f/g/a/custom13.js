
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
          alert("De�i�iklik ba�ar�l�");
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