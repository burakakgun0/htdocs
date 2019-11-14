<style type="text/css">
 label.filebutton {
    width:15.75px;
    height:22px;
    overflow:hidden;
    position:relative;
   
}

label span input {
    z-index: 999;
    line-height: 0;
    font-size: 50px;
    position: absolute;
    top: -2px;
    left: -700px;
    opacity: 0;
    filter: alpha(opacity = 0);
    -ms-filter: "alpha(opacity=0)";
    cursor: pointer;
    _cursor: hand;
    margin: 0;

    padding:0;
}
	#progress-wrp {
  border: 1px solid #0099CC;
  padding: 1px;
  position: relative;
  height: 30px;
  border-radius: 3px;
  margin: 10px;
  text-align: left;
  background: #fff;
  box-shadow: inset 1px 3px 6px rgba(0, 0, 0, 0.12);
}

#progress-wrp .progress-bar {
  height: 100%;
  border-radius: 3px;
  background-color: #f39ac7;
  width: 0;
  box-shadow: inset 1px 1px 10px rgba(0, 0, 0, 0.11);
}

#progress-wrp .status {
  top: 3px;
  left: 50%;
  position: absolute;
  display: inline-block;
  color: #000000;
}
</style>


<div class="create-post">
            	<div class="row">
            		<div class="col-md-7 col-sm-7">
                  <div class="form-group">
                    <img src="images/users/user-1.jpg" alt="" class="profile-photo-md" />
                    <textarea name="texts" id="text" cols="30" rows="1" class="form-control" placeholder="Aklında ne var ?"></textarea>
                  </div>
                </div>
            		<div class="col-md-5 col-sm-5">
                  <div class="tools">
<ul class="publishing-tools list-inline">
               <li><a ><label class="filebutton"><i class="ion-images"></i>
<span><input type="file" id="myfile" name="myfile" onchange="loadFile(event)" accept="image/*" multiple></span>
</label></a></li>
<li><a ><label class="filebutton"><i class="ion-ios-videocam"></i><span><input accept="video/*" type="file" id="myfile" onchange="loadFile(event)" name="myfile"></span>
</label></a></li> 
                    </ul>
                    <button onclick="post()" id="group" value="<?=$groupCek['id'] ?>" class="btn btn-primary pull-right">Paylaş</button>
                  </div>
                </div>
                <!--  -->
                 <script>
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
</script>
<div id="resimler">
      
      </div>
<div id="load"> </div>
      
            	</div>
            </div>

<script>
  
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


var abcd=0;
</script> 