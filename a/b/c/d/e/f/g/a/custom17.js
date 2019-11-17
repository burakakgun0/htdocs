function photoChange()
{


  if (dosyalar.length>0) {  postPaylas(dosyalar[dosyalar.length-1],1); }
  if (dosyalar2.length>0) {  postPaylas(dosyalar2[dosyalar2.length-1],2); }
  
 

  

 if (dosyalar.length>0 || dosyalar2.length>0) {
 document.getElementById("load").innerHTML='<div id="progress-wrp"><div class="progress-bar"></div><div class="status">0%</div></div>';
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
    console.log(this.file);
//console.log(formData);
abcd++;


    $.ajax({
        type: "POST",
        url: "config/editProfilePro.php",

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
             console.log("456");
        },
        async: true,
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        timeout: 60000
    });
};

Upload.prototype.doUploadd = function () {
    var that = this;
    var formData = new FormData();

    // add assoc key values, this will be posts values
    formData.append("file", this.file, this.getName());
    formData.append("upload_file", true);
    console.log(this.file);
//console.log(formData);
abcd++;


    $.ajax({
        type: "POST",
        url: "config/editProfileCover.php",

        xhr: function () {
            var myXhr = $.ajaxSettings.xhr();
            if (myXhr.upload) {
      
              if(abcd==dosyalar2.length)
              {
                myXhr.upload.addEventListener('progress', that.progressHandling, false);
              }
            }
            return myXhr;
        },
        success: function (data) {
           
            
        },
        error: function (error) {
             console.log("456");
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
postPaylas = function (e,id)
{
    var file = e;   
     var upload = new Upload(file);   
     if(id==1)
     {
        upload.doUpload();
     }
     else if(id==2)
     {
        upload.doUploadd();
     }
    
  
}
});
var abcd=0;


var dosyalar = new Array();
var dosyalar2 = new Array();
var loadFile = function(event) {

for(var i=0;i<event.target.files.length;i++)
{
console.log(i);

dosyalar.push(event.target.files[i]);

}
};

var loadFile2 = function(event) {

for(var i=0;i<event.target.files.length;i++)
{
console.log(i);
dosyalar2.push(event.target.files[i]);

}
};