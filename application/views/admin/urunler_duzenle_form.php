<?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?>

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Urun Duzenleme</h1>
                        <form action="<?=base_url()?>Admin/Urunler/guncelle/<?=$veri[0]->Id?>" method="POST" >
                                 
                            <div class="form-group">
                            <label for="exampleInputEmail1">Ad</label>
                            <input type="text" class="form-control" id="email"required name="Ad" aria-describedby="emailHelp" value="<?=$veri[0]->Ad?>" >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Grubu</label>
                             <select class="form-control" id="sifre" required name="Grubu" >
                                    <option>indirim</option>
                                    <option>kampanya</option>
                                    <option>Yeni</option>
                                </select> </div>
                          <div class="form-group">
                            <label id="kategori">kategori</label>
                           <select class="form-control" name="Kategori">
                            <option value="<?=$veri[0]->Kategori?>"><?=$veri[0]->Katadi?></option>
                            <?php   foreach($veriler as $rs){ ?>
                            <option value="<?=$rs->Id?>"><?=$rs->Adi?></option>
                            <?php } ?>
                             </select>
                          </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Fiyat</label>
                            <input type="adsoy" class="form-control" id="adsoy"  name="Turu" value="<?=$veri[0]->Fiyat?>">
                          </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Stok</label>
                            <input type="text" class="form-control" id="yetki"  name="Stok" value="<?=$veri[0]->Stok?>" >
                          </div>
                            <div class="form-group " >
                                <label for="inputEmail3" class="control-label" >Ürün Özellikleri</label><br>
                                <textarea name="Aciklama"><?=$veri[0]->Aciklama?></textarea>
                             <div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <input type="text" class="form-control" id="yetki"  name="Description" value="<?=$veri[0]->Description?>" >
                          </div>
                             <div class="form-group">
                            <label for="exampleInputEmail1">Keywords</label>
                            <input type="text" class="form-control" id="yetki"  name="Keywords" value="<?=$veri[0]->Keywords?>" >
                          </div>
                          <button type="submit" class="btn btn-primary">Kaydı Güncelle</button>
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
        CKEDITOR.replace('Aciklama')
    $('.textarea').wvysihtml5()
    })
    </script>
