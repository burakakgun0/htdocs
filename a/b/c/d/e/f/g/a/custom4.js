//Yorumda Form Sýfýrla

 function FormSifirla($form) {
        $form.find('input:text, input:password, input:file, select, textarea').val('');
        $form.find('input:radio, input:checkbox').removeAttr('checked').removeAttr('selected');
        }


        
        // Post Beðenme
       Likefunction = function (_postId, _userId)
       {
        var degerler = 'postId='+ _postId + '&userId='+_userId;
         $.ajax({
        type: "POST", 
        url: "config/like.php", 
        data : degerler, 
        success:function(){
        return 123;
        }
        });
        }

        function like (postId, userId, username) {
        var s= Likefunction(postId,userId);

        var a=   document.getElementById("lik"+postId).innerHTML;
        document.getElementById("like"+postId).innerHTML='<a onclick="unlike('+postId+','+userId+')"  class="btn text-green"><i  class="icon ion-thumbsup"></i><span id="lik'+postId+'">'+a+'</span> </a>';
        var d= deger("lik"+postId);
        d++;
        
        document.getElementById("lik"+postId).innerHTML=d;
        }

        //Post Beðenmekten Vazgeçme
        unLikefunction = function (_postId, _userId)
        {
        var degerler = 'postId='+ _postId + '&userId='+_userId;
        $.ajax({
        type: "POST", 
        url: "config/unlike.php", 
        data : degerler, 
        success:function(cevap){
       
        }
        });
        }

        function unlike (postId, userId, username) {
        unLikefunction(postId,userId);
        var a=   document.getElementById("lik"+postId).innerHTML;
        document.getElementById("like"+postId).innerHTML='<a onclick="like('+postId+','+userId+')"  class="btn text-green"><i  class="icon ion-thumbsup"></i><span id="lik'+postId+'">'+a+'</span> </a>';

        var d= deger("lik"+postId);
        d--;
      
        document.getElementById("lik"+postId).innerHTML=d;
        }
        
        // YORUM
        // ajax yorum
        $(document).ready(function(){
          deger = function (_id)
{
var a=  $("#"+_id).text();
return a;
}
        jqueryfunction = function (_id, _message)
        {
        var degerler = 'comment='+_message+'&id='+_id;
        $.ajax({
        type: "POST", 
        url: "config/comment.php", 
        data : degerler, 
        success:function(cevap){
        FormSifirla($('.form'));//deðerler sýfýrlandý
        }
        });
        } });

            function ref(id,username,takenCommentCount,path)
        {
        var tmp = document.getElementById("message"+id).value;
        if (tmp!="")
         {
        jqueryfunction (id,tmp);
        takenCommentCount++;
        var div = document.getElementById("yorumlar"+id).innerHTML;
        var xz = '<div class="post-comment"><img src="'+path+'" alt="" class="profile-photo-sm" /><p><a href="'+username+'" class="profile-link">'+username+' </a></i>'+tmp+'</p></div>';
        div = xz+div;
        document.getElementById("yorumlar"+id).innerHTML=div;
        var div = document.getElementById("com"+id).innerHTML;
        div = takenCommentCount;
        var a="";
        a=document.getElementById("com"+id);
        var d= deger("com"+id);
        d++;
        
        document.getElementById("com"+id).innerHTML=d;
        }
        }
