$(document).ready(function(){
          inGroupp = function (name)
          {
          var degerler ='name='+name;
         
          $.ajax({
          type: "POST", 
          url: "config/ingroup.php", 
          data : degerler,
          success: function(data) {
          
          window.location.reload();
          }
          });
          }
          });

    function inGroup()
{
  
  var name=document.getElementById("name").value;
  

  inGroupp(name);

}

$(document).ready(function(){
          outGroupp = function (name)
          {
          var degerler ='name='+name;
         
          $.ajax({
          type: "POST", 
          url: "config/outgroup.php", 
          data : degerler,
          success: function(data) {
          
          window.location.reload();
          }
          });
          }
          });

    function outGroup()
{
  
  var name=document.getElementById("name").value;
  

  outGroupp(name);

}
