
  
          $(document).ready(function(){
          postt = function (text,group)
          {
          var degerler ='&text='+text+'&group='+group;
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
  var group=document.getElementById("group").value;

  if (text!="" || dosyalar.length!="") {
  postt(text,group);
for(var i=0;i<dosyalar.length;i++)
{

	postPaylas(dosyalar[i]);
	console.log(dosyalar[i]);
}
  
 if (dosyalar.length>0) {
 document.getElementById("load").innerHTML='<div id="progress-wrp"><div class="progress-bar"></div><div class="status">0%</div></div>';
 } else {
  window.location.reload();
 }
} else {
  alert("Boş Post");
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
postPaylas = function (e)
{
    var file = e;
    var upload = new Upload(file);

    // maby check size or type here with upload.getSize() and upload.getType()

    // execute upload
       console.log("czx");
    upload.doUpload();
    console.log("asd");
}
});
    var a=0;
                  var dosyalar = new Array();
var loadFile = function(event) {

for(var i=0;i<event.target.files.length;i++)
{
console.log(i);
dosyalar.push(event.target.files[i]);
var c= document.getElementById("resimler").innerHTML;
 //console.log(c);
if (event.target.accept=="image/*") {
var onizleme = document.getElementById('onizleme');
 c+=' <img id="onizleme'+a+'"  width="100" height="100" />';
 document.getElementById("resimler").innerHTML=c;
 //console.log(document.getElementById("resimler").innerHTML);
document.getElementById("onizleme"+a).src = URL.createObjectURL(event.target.files[i]);
} else {
  var onizleme = document.getElementById('onizleme');
 c+=' <img id="onizleme'+a+'"  width="100" height="100" />';
 document.getElementById("resimler").innerHTML=c;
 //console.log(document.getElementById("resimler").innerHTML);
document.getElementById("onizleme"+a).src = "dimg/play.jpg";
}
a=a+1;
}
};

var abcd=0;