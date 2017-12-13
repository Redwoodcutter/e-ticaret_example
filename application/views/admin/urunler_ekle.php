<?php
$this->load->view('admin\_header');
$this->load->view('admin\_sidebar');
?>

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                       
                        <h1 class="page-header">Urun Ekle</h1>
                        <form action="<?=base_url()?>admin/urunler/ekle_kaydet/" method="POST" >
                            <div class="form-group">
                            <label for="exampleInputEmail1">Ad</label>
                            <input type="text" class="form-control" id="Ad"required name="Ad"  >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Kodu</label>
                            <input type="text" class="form-control" id="sifre" required name="Kodu" placeholder="Password">
                          </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Turu</label>
                            <input type="adsoy" class="form-control" id="adsoy" required name="Turu" >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Kategori</label>
                            <input type="text" class="form-control" id="durum" required name="Kategori"  >
                          </div>
                             <div class="form-group">
                            <label for="exampleInputPassword1">Stok</label>
                            <input type="text" class="form-control" id="durum" required name="Stok" >
                          </div>
                             <div class="form-group">
                            <label for="exampleInputPassword1">Durum</label>
                            <input type="text" class="form-control" id="durum" required name="Durum" >
                          </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Tarih</label>
                            <input type="text" class="form-control" id="yetki"  name="Tarih"  >
                          </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Resim</label>
                            <input type="text" class="form-control" id="yetki"  name="Resim"  >
                          </div>
                             <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <input type="text" class="form-control" id="durum"  name="Description" >
                          </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Keywords</label>
                            <input type="text" class="form-control" id="yetki"  name="Keywords"  >
                          </div>
                          <button type="submit" class="btn btn-primary">Yeni Urun Ekle</button>
                        </form>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
</div>
<?php
$this->load->view('admin\_footer');
?>