
$(document).ready(function(){
          accChangee = function (takip,bildirimler,mesajlar,etiket,bildirimSes)
          {
          var degerler ='takip='+takip+'&bildirimler='+bildirimler+'&mesajlar='+mesajlar+'&etiket='+etiket+'&bildirimSes='+bildirimSes;
          console.log(degerler);
          $.ajax({
          type: "POST", 
          url: "config/changeAcc.php", 
          data : degerler,
          success: function(data) {
          
          if(data=="Okey")
          {
          alert("Deðiþiklik baþarýlý");
          }
          }
          });
          }
          });

    function accChange()
{
  
  var takip=document.getElementById("takip").checked;
  var bildirimler=document.getElementById("bildirimler").checked;
  var mesajlar=document.getElementById("mesajlar").checked;
  var etiket=document.getElementById("etiket").checked;
  var bildirimSes=document.getElementById("bildirimSes").checked;
  

  accChangee(takip,bildirimler,mesajlar,etiket,bildirimSes);
  

}