<?php
       $this->load->view('admin/_header'); 
       $this->load->view('admin/_sidebar');
?>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Ürün  Resim Galeri Ekleme</h1>
                        
                        Ürün Resimlerini Giriniz..<br/><br/>
                       <b> <i>Yükleyebileceğiniz  resim türleri gif|jpg|png max boyutlar:1024*1024 ve boyut: 1000kb'dır...</i></b><br/><br/>
                       <?php if($this->session->flashdata("mesaj")){ ?>  
                      
                       <div class="panel panel-yellow">
                           <div class="panel-heading">
                          
                           </div>
                       <div class="panel-body">
                            <p><?=$this->session->flashdata("mesaj")?></p>
                       </div>
                       <?php } ?>
                    </div>
                       
                  <form enctype="multipart/form-data" method="POST" action="<?=base_url()?>Admin/Urunler/galeri_kaydet/<?=$id?>" >
                            <div class="form-group">
                                                <div class="form-group">
                            <label for="exampleInputEmail1">Galeri Ekle</label>
                            <input type="file" class="form-control" id="resim" required name="resim"  >
                          </div>
                          <button type="submit" class="btn btn-primary">Galeriyi Kaydet</button>
                        </form>
                       
                    </div>
                      
                </div>
                    
                <?php foreach ($veriler as $rs) {   ?>
               
              <img src="<?=base_url()?>upload/<?=$rs->Resim?>" height="100">
                  <a href="<?=base_url()?>Admin/Urunler/galeri_sil/<?=$id?>/<?=$rs->Id?>"onclick="return confirm('Silmek İstediğinden Emin misin')"class="btn btn-danger" >Sil</a>
              <?php } ?> 
                 
               
            </div>
           
        </div>
<?php 

       $this->load->view('admin/_footer');

?>