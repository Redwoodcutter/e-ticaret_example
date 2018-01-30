<?php 
        $this->load->view('admin/_header');
	$this->load->view('admin/_sidebar');
?>
<div id="page-wrapper">
    
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5">
                        <h1 class="page-header">Kategori Düzenleme Menüsü</h1>
                        
               
   <form method="post" action="<?=base_url()?>Admin/Home/kategori_guncelle/<?=$veri[0]->Id?>" >
            <div class="form-group" >
            <label id="adi">Adi</label>
            <input type="text" value="<?=$veri[0]->Adi?>" class="form-control" id="adi" name="adi">
         </div>
            <div class="form-group">
             <label id="description">Description</label>
             <input type="text" value="<?=$veri[0]->Description?>"  class="form-control" id="description" name="description">
          </div> 
            <div class="form-group">
             <label id="keywords">Keywords</label>
             <input type="text" value="<?=$veri[0]->Keywords?>"  class="form-control" id="keywords" name="keywords">
          </div>
       <div class="form-group">
             <label id="durum">Durum</label>
             <input type="text" value="<?=$veri[0]->Durum?>"  class="form-control" id="durum" name="durum">
          </div>
       <div class="form-group">
             <input type="hidden" value="<?=$veri[0]->Parent_Id?>"  class="form-control" id="tarih" name="Parent_id" value="0">
          </div>
       
     <button type="submit" class="btn btn-default">Güncelle</button>
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