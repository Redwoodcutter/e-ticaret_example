
    <!-- Page Content -->
    <div class="container">

      <div class="row">
<?php if($this->session->userdata("uye_session")) {?>
        <div class="col-lg-3">
            <h1 class="my-4"><?=$sayfa?></h1>
                <div class="list-group">
                        <a class="list-group-item" href="<?=base_url()?>Uye/hesabim"> <i class="fa fa-user fa-fw"></i>Hesabım</a>
                        <a class="list-group-item" href="<?=base_url()?>Uye/Sepetim"> <i class="fa fa-shopping-basket fa-fw"></i>Sepetim <?=$sepet[0]->say?></a>
                        <a class="list-group-item" href="<?=base_url()?>Uye/Siparisler"> <i class="fa fa-shopping-basket fa-fw"></i>Siparişlerim</a>
                        <a class="list-group-item" href="<?=base_url()?>Uye/mesaj_gonder"> <i class="fa fa-inbox fa-fw"></i>Mesaj Gönder</a>
                        <a class="list-group-item" href="<?=base_url()?>Uye/mesaj_liste"> <i class="fa fa-inbox fa-fw"></i>Gelen Mesajlar</a>
                        <a class="list-group-item" href="<?=base_url()?>Uye/login_cik"> <i class="fa fa-sign-out fa-fw"></i>Çıkıs Yap</a>
                  </div>
        </div>
<?php } else{ ?>
<div class="col-lg-3">
    <h1 class="my-4"><?=$sayfa?></h1>
        <div class="list-group">
                    <?php foreach ($kategori as $rs){ ?>
          <a href="<?=base_url()?>Home/kategori_detay/<?=$rs->Id?>" class="list-group-item dropdown-header fa fa-caret-right fa"data-toggle=""><?=$rs->Adi?></a><span class="caret"></span> 
          <ul class="dropdown-menu ">
                                <li> 
                                    <div class="row">
                                         <div class="col-md-12 col-lg-12">
                                            <div class="">
                                             
                                            </div>
                                        </div>                           
                                    </div>
                                </li>
                        </ul>
                    <?php } ?>
        </div>
</div>
          
<?php } ?>