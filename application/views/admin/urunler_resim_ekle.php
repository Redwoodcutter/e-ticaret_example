<?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
    
?>

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                       
                        <h1 class="page-header">Resim Ekle</h1>
                        <?php if($this->session->flashdata("mesaj")) { ?>
                         <div class="alert alert-info">
                             <a href="#" class="alert-danger">Hata</a>
                             <br>
                                <?=$this->session->flashdata("mesaj");?> 
                                
                            </div>
                        <?php } ?>
                        <form action="<?=base_url()?>Admin/Urunler/resim_kaydet/<?=$id?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                            <label for="exampleInputEmail1">Resim Ekle</label>
                            <input type="file" class="form-control" id="Resim" required name="resim"  >
                          </div>
                          <button type="submit" class="btn btn-primary">Resimi Kaydet</button>
                        </form>
                    <!--/.col-lg-12 -->
                </div>
                <!--/.row -->
            </div>
            <!--/.container-fluid -->
        </div>
</div>
<?php
$this->load->view('admin/_footer');
?>