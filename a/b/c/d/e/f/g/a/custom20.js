﻿function msjGonder(id)
                        {
                      //var s =mesajAt(id);
                      var a =document.getElementById("message").value;
                      var s =mesajCek(id,a);

                      /*
                      var objDiv = document.getElementById("asd");
                      objDiv.scrollTop = objDiv.scrollHeight;
                      */
                      }
                      //mesaj at  
                      $(document).ready(function(){
                      mesajCek = function (userId,mesaj)
                      {
                      var degerler = 'userId='+ userId +'&mesaj='+mesaj;
                    
                     
                      $.ajax({
                      type: "POST", 
                      url: "config/mesajGonder.php", 
                      data : degerler,

                      success:function(data){
                 
                      window.location.reload();
                      }

                      });

                      }});