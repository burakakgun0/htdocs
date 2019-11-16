<div class="col-md-2 static">
            <div class="suggestions" id="sticky-sidebar">
              <h4 class="grey">Önerilen Gruplar</h4>
              <?php $right=$db->query("SELECT * FROM `facegroup`"); 
              while ($rightGroup=$right->fetch(PDO::FETCH_ASSOC)) { ?>
                 <div class="follow-user">
                <img src="<?=$rightGroup['path']; ?>" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="<?=$rightGroup['seo'] ?>/group"><?=$rightGroup['name'] ?></a></h5>
                  <a href="<?=$rightGroup['seo'] ?>/group" class="text-green">Grup Detayı</a>
                </div>
              </div>
               <?php } ?>
              
              
            </div>
          </div>