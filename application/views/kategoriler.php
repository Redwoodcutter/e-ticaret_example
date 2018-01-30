<?php 
		$this->load->view('_header');
                $this->load->view('_sidebar');
?>

<div class="col-lg-8">
<div class="card " style="margin-top: 100px;">
    
            <h5 class="card-header">Kategoriler</h5>
            <div class="card-body">
                  <ul class="list-unstyled ">
                    <?php foreach ($kategori as $rs) { ?>  
                    <li >
                        <a href="<?=base_url()?>Home/kategori_detay/<?=$rs->Id?>" class="btn btn-info col-lg-12"><?=$rs->Adi?></a><hr>
                    </li>
                    <?php }?>  
                   
                  </ul>
             </div>
                
            
           </div>
            </div>
   
</div>
</div>
    
    <br>
    <?php 
                $this->load->view('_footer'); 
    ?>
    