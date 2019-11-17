  
          $(document).ready(function(){
          postt = function (text)
          {
          var degerler ='&text='+text;
          console.log(degerler);
          $.ajax({
          type: "POST", 
          url: "config/postText.php", 

          data : degerler,
          success: function(data) {
          
		
          }
          });
          }
          });

    function post()
{
  

 // var myfile=document.getElementById("myfile").value;
  var text=document.getElementById("text").value;
  if (text!="" || dosyalar.length!="") {
  postt(text);
for(var i=0;i<dosyalar.length;i++)
{

	postPaylas(dosyalar[i]);
	
}
  
 
 if (dosyalar.length>0) {
 document.getElementById("load").innerHTML='<div id="progress-wrp"><div class="progress-bar"></div><div class="status">0%</div></div>';
 } else {
  window.location.reload();
 }
 
} else {
  alert("Boş Post Atılamaz");
}
}


///////////////////////////
var Upload = function (file) {
    this.file = file;
};

Upload.prototype.getType = function() {
    return this.file.type;
};
Upload.prototype.getSize = function() {
    return this.file.size;
};
Upload.prototype.getName = function() {
    return this.file.name;
};
Upload.prototype.doUpload = function () {
    var that = this;
    var formData = new FormData();

    // add assoc key values, this will be posts values
    formData.append("file", this.file, this.getName());
    formData.append("upload_file", true);
  

abcd++;


    $.ajax({
        type: "POST",
        url: "config/post.php",

        xhr: function () {
            var myXhr = $.ajaxSettings.xhr();
            if (myXhr.upload) {
			
              if(abcd==dosyalar.length)
              {
                myXhr.upload.addEventListener('progress', that.progressHandling, false);
              }
            }
            return myXhr;
        },
        success: function (data) {
           
            
        },
        error: function (error) {
             
        },
        async: true,
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        timeout: 60000
    });
};

Upload.prototype.progressHandling = function (event) {
    var percent = 0;
    var position = event.loaded || event.position;
    var total = event.total;
    var progress_bar_id = "#progress-wrp";
    if (event.lengthComputable) {
        percent = Math.ceil(position / total * 100);

    }
    // update progressbars classes so it fits your code
    $(progress_bar_id + " .progress-bar").css("width", +percent + "%");
    $(progress_bar_id + " .status").text(percent + "%");

     if (percent==100) {
      
      window.location.reload();
    }
    
};

$(document).ready(function(){
postPaylas = function (e)
{
    var file = e;
    var upload = new Upload(file);

    // maby check size or type here with upload.getSize() and upload.getType()

    // execute upload
     
    upload.doUpload();
  
}
});


var abcd=0;