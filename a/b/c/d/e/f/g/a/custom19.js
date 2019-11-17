$(document).ready(function(){
       //$('#search').focus();
       $('#search').keyup(function(){
       $("#loading").show();
        var search = $('#search').val();
        if(search.length >2) {
          $.ajax({
        
          type: 'POST',
          url: 'config/search.php',
          data: {search:search},
          success: function(data) {
        
          
            if(!data.error) {
              $('#result').html(data);
                $("#loading").hide();
          }
        }
      });
        
    }
        if (search.length < 1) {
                $('#result').html('');
            $("#loading").hide();
        
      }
    });
  });