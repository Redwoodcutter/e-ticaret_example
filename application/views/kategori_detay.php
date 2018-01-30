<?php 
		$this->load->view('_header');
                $this->load->view('_sidebar'); 
?>



  <div class="col-lg-9">
                        <?php if($this->session->flashdata("mesaj")) { ?>
                         <div class="alert alert-info">
                             <a href="#" class="alert-success">Başarılı</a>
                             <br>
                                <?=$this->session->flashdata("mesaj");?> 
                                
                            </div>
                        <?php } ?>
          <h1 class="my-4"><?=$kategori1[0]->Adi?></h1>
       <div class="col-lg-9">
 <div class="panel-body">
                        <?php if($this->session->flashdata("mesaj")) { ?>
                         <div class="alert alert-info">
                             <a href="#" class="alert-success"></a>
                             <br>
                                <?=$this->session->flashdata("mesaj");?> 
                                
                            </div>
        <?php } ?>

          <div class="container">
              <div class="row">
              
                <?php foreach ($veri2 as $rs){ ?>
            <a href="<?=base_url()?>home/urundetay/<?=$rs->Id?>">
                <img class="d-block img-fluid" src="<?=base_url()?>upload/<?=$rs->Resim?>" >
              
               
              <h2 class="card-title"><?=$rs->Ad?></h2></a>
              <p class="card-text"><?=$rs->Description?></p>
            
          </div>
                 
          <?php } ?>
           
          
          <!--/.card -->
          <!--/.row -->

        </div>
     
 


        </div>





</div>
</div>

</div>
</div>

<?php 
		
                $this->load->view('_footer'); 
?>


