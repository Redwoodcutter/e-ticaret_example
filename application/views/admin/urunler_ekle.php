<?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?>

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                       
                        <h1 class="page-header">Urun Ekle</h1>
                        <form action="<?=base_url()?>Admin/Urunler/ekle_kaydet/" method="POST" >
                            <div class="form-group">
                            <label for="exampleInputEmail1">Ad</label>
                            <input type="text" class="form-control" id="Ad"required name="Ad" placeholder="Ürün adı girin" >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Grubu</label>
                            
                                <select class="form-control" id="sifre" required name="Grubu" >
                                    <option>indirim</option>
                                    <option>kampanya</option>
                                    <option>Yeni</option>
                                </select>
                          </div>
                             <div class="form-group">
                            <label for="exampleInputPassword1">Kategori</label>
                             <select class="form-control" id="sifre" name="Kategori" placeholder="Password" >
                            <?php foreach ($veri as $rs){ ?>
                            <option value="<?=$rs->Id?>"><?=$rs->Adi?></option>
                            <?php }?> 
                            </select>
                          </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Fiyat</label>
                            <input type="adsoy" class="form-control" id="adsoy" required name="Turu" placeholder="Ürün Fiyat girin" >
                          </div>
                             <div class="form-group">
                            <label for="exampleInputPassword1">Stok</label>
                            <input type="text" class="form-control" id="durum" required name="Stok"  placeholder="Ürün stok durumunu girin">
                          </div>
                            <div class="form-group " >
                                <label for="inputEmail3" class="control-label" >Ürün Özellikleri</label><br>
                                <textarea name="Aciklama1"></textarea>
                             <div>
                             <div class="form-group">
                            <label for="exampleInputPassword1">Durum</label>
                           <select class="form-control" id="sifre" required name="Durum" >
                                    <option>Satişta</option>
                                    <option>Stokta Yok</option>
                                    <option>Gelecek</option>
                                </select>
                          </div>
                             <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <input type="text" class="form-control" id="durum"  name="Description" placeholder="Ürün tanımını girin" >
                          </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Keywords</label>
                            <input type="text" class="form-control" id="yetki"  name="Keywords" placeholder="Ürün etiketi girin" >
                          </div>
                          <button type="submit" class="btn btn-primary">Yeni Urun Ekle</button>
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
                <script src="<?=base_url()?>assets/admin/ckeditor/ckeditor.js"></script>
<script>
    $(function(){
        CKEDITOR.replace('Aciklama1')
    $('.textarea').wvysihtml5()
    })
    </script>
