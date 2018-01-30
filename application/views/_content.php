
        <!--/.col-lg-3 -->
  
                      
        <div class="col-lg-9">
                        <?php if($this->session->flashdata("mesaj")) { ?>
                         <div class="alert alert-info">
                             <a href="#" class="alert-success">Başarılı</a>
                             <br>
                                <?=$this->session->flashdata("mesaj");?> 
                                
                            </div>
                        <?php } ?>
          <h1 class="my-4">Kampanyalı Ürünler</h1>
          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php $say=0;
                $aktif=null;
                foreach($kampanya as $rs){
                    
                    if($say==0){
                        $aktif="active";
                    }else{
                        $aktif="null";
                    }
                ?>
              <li data-target="#carouselExampleIndicators" data-slide-to="<?=$say?> " class="<?=$aktif?>"></li>
       
                <?php $say++; } ?>
            </ol>
            <div class="carousel-inner" role="listbox">
                <?php $say=0;
                $aktif=null;
                foreach($kampanya as $rs){
                    $say++;
                    if($say==1){
                        $aktif="active";
                    }else{
                        $aktif="null";
                    }
                ?>
              <div class="carousel-item <?=$aktif?>">
                  <a href="<?=base_url()?>Home/urundetay/<?=$rs->Id?>">
                <img class="d-block img-fluid" src="<?=base_url()?>upload/<?=$rs->Resim?>" alt="First slide"></a>
                    <h4><?=$rs->Ad?></h4>
                    <p><span><?=$rs->Description?></span></p>
              </div>
                <?php } ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">

           <?php foreach($kampanya_urun as $rs) { ?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="<?=base_url()?>Home/urundetay/<?=$rs->Id?>"><img class="card-img-top" src="<?=base_url()?>upload/<?=$rs->Resim?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"><?=$rs->Ad?></a>
                  </h4>
                  <h5><?=$rs->Fiyat ?> TL</h5>
                  <p class="card-text"><?=$rs->Description ?></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted"></small>
                </div>
              </div>
            </div>
           <?php } ?>
           
               <h1 class="my-4">Sizin için seçtigimiz ürünler</h1>
    <div id="carouselExampleIndicators1" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php $say=0;
                $aktif=null;
                foreach($random as $rs){
                    
                    if($say==0){
                        $aktif="active";
                    }else{
                        $aktif="null";
                    }
                ?>
              <li data-target="#carouselExampleIndicators1" data-slide-to="<?=$say?> " class="<?=$aktif?>"></li>
       
                <?php $say++; } ?>
            </ol>
            <div class="carousel-inner" role="listbox">
                <?php $say=0;
                $aktif=null;
                foreach($random as $rs){
                    $say++;
                    if($say==1){
                        $aktif="active";
                    }else{
                        $aktif="null";
                    }
                ?>
              <div class="carousel-item <?=$aktif?>">
                  <a href="<?=base_url()?>Home/urundetay/<?=$rs->Id?>">
                <img class="d-block img-fluid" src="<?=base_url()?>upload/<?=$rs->Resim?>" alt="First slide"></a>
                    <h4><?=$rs->Ad?></h4>
                    <p><span><?=$rs->Description?></span></p> </div>
                <?php } ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
           
           <?php foreach($random_urun as $rs) { ?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="<?=base_url()?>Home/urundetay/<?=$rs->Id?>"><img class="card-img-top" src="<?=base_url()?>upload/<?=$rs->Resim?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"><?=$rs->Ad?></a>
                  </h4>
                  <h5><?=$rs->Fiyat ?> TL</h5>
                  <p class="card-text"><?=$rs->Description ?></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted"></small>
                </div>
              </div>
            </div>
           <?php } ?>
                <h1 class="my-4">Yeni Ürünlermiz</h1>
               <div id="carouselExampleIndicators5" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php $say=0;
                $aktif=null;
                foreach($yeni as $rs){
                    
                    if($say==0){
                        $aktif="active";
                    }else{
                        $aktif="null";
                    }
                ?>
              <li data-target="#carouselExampleIndicators5" data-slide-to="<?=$say?> " class="<?=$aktif?>"></li>
       
                <?php $say++; } ?>
            </ol>
            <div class="carousel-inner" role="listbox">
                <?php $say=0;
                $aktif=null;
                foreach($yeni as $rs){
                    $say++;
                    if($say==1){
                        $aktif="active";
                    }else{
                        $aktif="null";
                    }
                ?>
              <div class="carousel-item <?=$aktif?>">
                 <a href="<?=base_url()?>Home/urundetay/<?=$rs->Id?>">
                <img class="d-block img-fluid" src="<?=base_url()?>upload/<?=$rs->Resim?>" alt="First slide"></a>
                    <h4><?=$rs->Ad?></h4>
                    <p><span><?=$rs->Description?></span></p> </div>
                <?php } ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators5" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators5" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
           
           <?php foreach($yeni_urun as $rs) { ?>
           <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="<?=base_url()?>Home/urundetay/<?=$rs->Id?>"><img class="card-img-top" src="<?=base_url()?>upload/<?=$rs->Resim?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"><?=$rs->Ad?></a>
                  </h4>
                  <h5><?=$rs->Fiyat ?> TL</h5>
                  <p class="card-text"><?=$rs->Description ?></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted"></small>
                </div>
              </div>
            </div>
           <?php } ?>

          </div>
          <!--/.row -->

        </div>
        <!--/.col-lg-9 -->

      </div>
      <!--/.row -->

    </div>
    <!--/.container -->