<?php
$this->load->view('admin\_header');
$this->load->view('admin\_sidebar');
?>

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Urun Duzenleme</h1>
                        <form action="<?=base_url()?>admin/urunler/guncelle/<?=$veri[0]->Id?>" method="POST" >
                            <div class="form-group">
                            <label for="exampleInputEmail1">Ad</label>
                            <input type="text" class="form-control" id="Ad"required name="Ad"  value="<?=$veri[0]->Ad?>">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Kodu</label>
                            <input type="text" class="form-control" id="sifre" required name="Kodu" placeholder="Password" value="<?=$veri[0]->Kodu?>">
                          </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Turu</label>
                            <input type="adsoy" class="form-control" id="adsoy" required name="Turu" value="<?=$veri[0]->Turu?>">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Kategori</label>
                            <input type="text" class="form-control" id="durum" required name="Kategori" value="<?=$veri[0]->Kategori?>" >
                          </div>
                             <div class="form-group">
                            <label for="exampleInputPassword1">Stok</label>
                            <input type="text" class="form-control" id="durum" required name="Stok" value="<?=$veri[0]->Stok?>" >
                          </div>
                             <div class="form-group">
                            <label for="exampleInputPassword1">Durum</label>
                            <input type="text" class="form-control" id="durum" required name="Durum" value="<?=$veri[0]->Durum?>" >
                          </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Tarih</label>
                            <input type="text" class="form-control" id="yetki"  name="Tarih" value="<?=$veri[0]->Tarih?>" >
                          </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Resim</label>
                            <input type="text" class="form-control" id="yetki"  name="Resim" value="<?=$veri[0]->Resim?>" >
                          </div>
                             <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <input type="text" class="form-control" id="durum"  name="Description" value="<?=$veri[0]->Description?>" >
                          </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Keywords</label>
                            <input type="text" class="form-control" id="yetki"  name="Keywords" value="<?=$veri[0]->Keywords?>" >
                          </div>
                          <button type="submit" class="btn btn-primary">Kaydı Güncelle</button>
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
?><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

