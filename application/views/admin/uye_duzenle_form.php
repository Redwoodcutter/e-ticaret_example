<?php
$this->load->view('admin\_header');
$this->load->view('admin\_sidebar');
?>

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Üye Listesi</h1>
                        <form action="<?=base_url()?>admin/uyeler/guncelle/<?=$veri[0]->id?>" method="POST" >
                            <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="email"required name="email" aria-describedby="emailHelp" value="<?=$veri[0]->email?>" >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Sifre</label>
                            <input type="password" class="form-control" id="sifre" required name="sifre" placeholder="Password" value="<?=$veri[0]->sifre?>">
                          </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Ad Soyad</label>
                            <input type="adsoy" class="form-control" id="adsoy" required name="adsoy" value="<?=$veri[0]->ad_soy?>">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Durum</label>
                            <input type="text" class="form-control" id="durum" required name="durum" value="<?=$veri[0]->durum?>" >
                          </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Yetki</label>
                            <input type="text" class="form-control" id="yetki" required name="yetki" value="<?=$veri[0]->yetki?>" >
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
?>