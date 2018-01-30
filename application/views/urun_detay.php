<?php 
		$this->load->view('_header');
                $this->load->view('_sidebar'); 
?>
     <div class="col-lg-9">
 <div class="panel-body">
                        <?php if($this->session->flashdata("mesaj")) { ?>
                         <div class="alert alert-info">
                             <a href="#" class="alert-success"></a>
                             <br>
                                <?=$this->session->flashdata("mesaj");?> 
                                
                            </div>
        <?php } ?>
          <div class="card mt-4">
               <div id="carouselExampleIndicators" class="carousel slide mt-4" data-ride="carousel">
              <div class="carousel-inner" role="listbox">
               <div class="carousel-item active ">
                <img class="d-block img-fluid" src="<?=base_url()?>upload/<?=$veri[0]->Resim?>" alt="First slide">
              </div>
              <?php foreach($resimler as $rs){ ?>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="<?=base_url()?>upload/<?=$rs->Resim?>" alt="First slide">
              </div>
              <?php }?>
               <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
              </div>
               </div>
            <div class="card-body">
              <h3 class="card-title"><?=$veri[0]->Ad?></h3>
              <form class="form-horizontal" method="post" action="<?=base_url()?>Uye/sepete_ekle">
                 <h4><?=$veri[0]->Fiyat?> TL</h4>
                 <input type="hidden" name="urunid" value="<?=$veri[0]->Id ?>">
                     <label class="control-label"><span>Stok Miktari: <?=$veri[0]->Stok?> Adet</span></label><br>
                 <input type="number" name="miktar" value="1" placeholder="QTy." min="1" max="<?=$veri[0]->Stok?>" > Adet
                     <h4>Kategori : <?=$veri[0]->Katadi?> </h4>
                     <p><?=$veri[0]->Description?></p>
                      
                 
              <button type="submit" class="btn btn-success" value="Sepete Ekle">Sepete Ekle</button>
             </div>
            
                     
             </form>
                   
               
            </div>            
     
                  
          
              <div class="card-body">
          <div class="card card-outline-secondary my-4">
            <div class="card-header">
               <ul class="nav nav-pills">
                                <li class="active card-header"><a href="#Genel" data-toggle="tab" aria-expanded="t">Yorumlar</a>
                                </li>
                                <li class=" card-header"><a href="#E-mail" data-toggle="tab" aria-expanded="false">Ürün Özellikleri</a>
                                </li>
                              
                            </ul>
                            
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane  fade active in" id="Genel">
                                    <h4>Yorumlar</h4>
                                      <?php  foreach ($yorum as $rs) { 
                                          if($rs->Durum=='Onaylandi'){?>
                                            <div class="card-body"><?=$rs->Mesaj?>
                                      <p><p>
                                      <small class="text-muted"><?=$rs->Ad_soy?> on <?=$rs->Tarih?></small>
                                      <hr>
                                    </div>
                                       <?php }?>
                                       <?php }?>
                                      <?php if($this->session->uye_session){
             foreach ($uye as $rs){ ?>
                <div class="col-lg-6">
                            <form action="<?=base_url()?>Home/yorum_gonder" method="POST" >
                           <div class="form-group">
                                  <div class="col-lg-12">
                                   <input type="hidden" class="form-control" id="Ad_soy" name="Ad_soy" value="<?=$rs->ad_soy?>">
                              </div>
                                </div>  
                               <div class="form-group">
                              <div class="col-lg-12">
                             <input type="hidden" class="form-control" id="uye_idd" name="Uye_Id" value="<?=$rs->id?>">
                             </div>
                            </div>
                                 <div class="form-group">
                             <div class="col-lg-12">
                             <input type="hidden" class="form-control" id="Durum" name="Durum" value="yeni">
                             </div>  
                            </div>  
                             <div class="form-group">
                         <div class="col-lg-12"> 
                        <input type="hidden" class="form-control" id="ev_idd" name="Urun_Id" value="<?=$veri[0]->Id?>">
                         </div>
                         </div>
            
                            <div>
                          <div class="form-group">
                            <label id="kategori">Açıklama</label>
                            <textarea  name="Mesaj" rows="5" cols="100"  ></textarea>
            
                          </div>
                                <button type="submit" class="btn btn-success">Yorum yap</a>
                        </form>
                        </div> 
                 </div>
                <?php }?>
        
         
               <?php }else {?>
            <a href="<?=base_url()?>Home/login"><button type="submit" class="btn btn-success">Yorum Yapmak için giriş yapin</button></a>
             <?php  } ?>
                                </div>
                                <div class="tab-pane fade" id="E-mail">
                                    <h4>Ürün Özellikleri</h4>
                                
                                <?=$veri[0]->Aciklama?> 
                              
                                </div>
                               
                                
                                
                           
                              
                             </div>
                          
            </div> 
          </div>
              </div>
 </div>
          </div>
          <!--/.card -->
          </div>        
</div>
</div>
       </div>        
</div>
</div>
   


    <!-- Bootstrap core JavaScript -->
    <script src="<?=base_url()?>assets/home/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>assets/admin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url()?>assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?=base_url()?>assets/admin/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?=base_url()?>assets/admin/dist/js/sb-admin-2.js"></script>
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/home/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/home/css/bootstrap.min.js"></script>


  </body>

</html>

