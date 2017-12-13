<?php
$this->load->view('admin\_header');
$this->load->view('admin\_sidebar');
?>

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Üye Listesi</h1>
                        <form action="<?=base_url()?>admin/uyeler/ekle_kaydet" method="POST" >
                            <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="email"required name="email" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Sifre</label>
                            <input type="password" class="form-control" id="sifre" required name="sifre" placeholder="Password">
                          </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Ad Soyad</label>
                            <input type="adsoy" class="form-control" id="adsoy" required name="adsoy" >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Durum</label>
                            <input type="text" class="form-control" id="durum" required name="durum">
                          </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Yetki</label>
                            <input type="text" class="form-control" id="yetki" required name="yetki" >
                          </div>
                          <button type="submit" class="btn btn-primary">Yeni Üye Ekle</button>
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