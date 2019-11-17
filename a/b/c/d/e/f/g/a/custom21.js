var a=0;
                  var dosyalar = new Array();
var loadFile = function(event) {

for(var i=0;i<event.target.files.length;i++)
{

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