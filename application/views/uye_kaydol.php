<?php 
		$this->load->view('_header');
                $this->load->view('_sidebar'); 
?>
<div class="col-lg-6">
                        <h1 class="page-header">Kaydol</h1>
                        
               
   <form method="post" action="<?=base_url()?>Home/uye_kaydet">
         <div class="form-group" >
    <label id="email">Ad Soyad</label>
    <input type="text" class="form-control" required id="AdSoyad" name="AdSoyad">
         </div>
          <div class="form-group">
    <label id="pwd">email</label>
    <input type="email" class="form-control" required id="email" name="email">
          </div>
           <div class="form-group" >
    <label id="email">Sifre</label>
    <input type="text" class="form-control"required id="AdSoyad" name="sifre">
         </div>
          <div class="form-group">
     <input type="hidden" class="form-control" id="yetki" name="yetki" value="pasif">
          </div>         
       <div class="form-group">
     <label id="pwd">telefon</label>
     <input type="text" class="form-control" required id="telefon" name="telefon">
          </div>  
  
  <button type="submit" class="btn btn-default">Gönder</button>
</form>
                        
                    </div>
                    <!--/.col-lg-12 -->
                </div>
                <!--/.row -->    <?php 
                $this->load->view('_footer'); 
    ?>
    
