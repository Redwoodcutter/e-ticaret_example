<?php 
        $this->load->view('admin/_header');
	$this->load->view('admin/_sidebar');
?>
<div id="page-wrapper">
    
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5">
                        <h1 class="page-header">Kategori Ekle</h1>
                        
               
   <form method="post" action="<?=base_url()?>Admin/Home/kategori_kaydet">                
         <div class="form-group" >
    <label id="kategoriadi">Kategori Adi</label>
    <input type="text" class="form-control" id="kategoriadi" name="kategoriadi">
         </div>
       <div class="form-group" >
    <label id="description">Description</label>
    <input type="text" class="form-control" id="description" name="description">
         </div>
        <div class="form-group" >
    <label id="keywords">Keywords</label>
    <input type="text" class="form-control" id="keywords" name="keywords">
         </div>
        <div class="form-group" >
    <label id="durum">Durum</label>
    <input type="text" class="form-control" id="durum" name="durum">
         </div>
          <div class="form-group" >
    <label id="tarih">Tarih</label>
    <input type="text" class="form-control" id="tarih" name="tarih">
         </div>
     
  <button type="submit" class="btn btn-default">Gönder</button>
</form>
                        
                    </div>
                    <!--/.col-lg-12 -->
                </div>
                <!--/.row -->
            </div>
            <!--/.container-fluid -->
        </div>
<?php
    $this->load->view('admin/_footer');
?>