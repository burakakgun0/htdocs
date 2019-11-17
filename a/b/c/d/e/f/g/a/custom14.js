
$(document).ready(function(){
          accChangee = function (company,designation,fromdate)
          {
          var degerler ='company='+company+'&designation='+designation+'&fromdate='+fromdate;
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
  
  var company=document.getElementById("company").value;
  var designation=document.getElementById("designation").value;
  var fromdate=document.getElementById("fromdate").value;
  

  accChangee(company,designation,fromdate);
  

}