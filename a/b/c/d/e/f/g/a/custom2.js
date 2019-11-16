
          $(document).ready(function(){
          createGroupp = function (name,description)
          {
          var degerler ='name='+name+'&description='+description;
          console.log(degerler);
          $.ajax({
          type: "POST", 
          url: "config/creategroup.php", 
          data : degerler,
          success: function(data) {
          console.log(data);
           if (data=='Var') {
            alert("Bu isimde bir grup zaten var!");
           }
          if(data!="No" && data!="Var")
          {
          alert("Değişiklik Başarılı");
           window.location.href = data+'/group';
          } else if(data=="No") {
            alert("Başarısız");
          }
          }
          });
          }
          });

    function createGroup()
{
  
  var name=document.getElementById("name").value;
  var description=document.getElementById("description").value;
  

  createGroupp(name,description);
  

}