<?php

include "config.php";
if (isset($_POST['search'])) {
  $keyword=$_POST['search'];


          $sql="SELECT * FROM `post` WHERE `message` LIKE :keyword limit 5";
          $q=$db->prepare($sql);
          $q->bindValue(':keyword','%'.$keyword.'%');
          $q->execute();
          while ($r=$q->fetch(PDO::FETCH_ASSOC)) {

              echo"<a href='".print_r($r['link'],true)."'><pre class='form-group'><i class='fa fa-sticky-note'></i> ".print_r($r['message'],true)."</pre></a>";
          }


          if($r['message']==null) {

            $sql="SELECT * FROM `user` WHERE `username` LIKE :keyword or `name`  LIKE :keyword or `surname`  LIKE :keyword limit 5";
            $q=$db->prepare($sql);
            $q->bindValue(':keyword','%'.$keyword.'%');
            $q->execute();
            while ($r=$q->fetch(PDO::FETCH_ASSOC)) {

              echo"<a href='".print_r($r['username'],true)."'><pre class='form-group'><i class='fa fa-user'></i> ".print_r($r['name'].' '.$r['surname'],true)."</pre></a>";
          }


          } 

          if($r['username']==null) {

            $sql="SELECT * FROM `facegroup` WHERE `name` LIKE :keyword limit 5";
            $q=$db->prepare($sql);
            $q->bindValue(':keyword','%'.$keyword.'%');
            $q->execute();
            while ($r=$q->fetch(PDO::FETCH_ASSOC)) {

              echo"<a href='".print_r($r['seo'].'/group',true)."'><pre class='form-group'><i class='fa fa-group'></i> ".print_r($r['name'],true)."</pre></a>";
          }


          } 

         

}

?>