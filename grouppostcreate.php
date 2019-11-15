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
				<div id="resimler">
      
      </div>
<div id="load"> </div>
      
            	</div>
            </div>

               
              
<script src="a\b\c\d\e\f\g\a\custom9.js">

</script> 