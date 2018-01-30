<?php 
		$this->load->view('_header');
              
?>
  <div class="col-lg-9">
  <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        
                        <div class="panel-body">
                        <?php if($this->session->flashdata("mesaj")) { ?>
                         <div class="alert alert-info">
                             <a href="#" class="alert-success">Başarılı</a>
                             <br>
                                <?=$this->session->flashdata("mesaj");?> 
                                
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                    
                    <div class="col-lg-6"></div>
                <div class="col-lg-6">
                     <div class="container">
                    <div class="panel panel-default">
                       <h1 class="page-header">Teslimat Bilgileri</h1>
                        <form action="<?=base_url()?>Uye/siparis_tamamla" method="POST" >
                            <div class="form-group">
                            <label for="exampleInputEmail1">Ad Soyad</label>
                            <input type="text" class="form-control" id=""required name="adsoy" placeholder="Ad Soyad" aria-describedby="emailHelp" value="<?=$uye[0]->ad_soy?>" >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Telefon Numarası</label>
                            <input type="text" class="form-control" id="sifre" required name="tel" placeholder="Telefon Numarası" value="<?=$uye[0]->Tel?>">
                          </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Adres</label>
                            <input type="adsoy" class="form-control" id="adsoy" required name="adres" value="<?=$uye[0]->Adres?>">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Şehir</label>
                            <input type="text" class="form-control" id="durum" required name="sehir" value="<?=$uye[0]->Sehir?>" >
                          </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Toplam Tutar</label>
                            <input type="text" class="form-control" id="yetki"  name="toplam" readonly value="<?=$toplam?> TL" > 
                          </div>
                            <input type="hidden" name="Siparis_durumu" value="Yeni">
                            <b>***** KREDİ KARTİ BİLGİLERİ *****</b><hr>
                          <button type="submit" class="btn btn-success">Siparişi Onayla</button>
                        </form>
                            </div>
                            <!--/.table-responsive -->
                        </div>
                        <!--/.panel-body -->
                    </div>
                    <!--/.panel -->
                </div>
                        
                    </div>
                    <!--/.col-lg-12 -->
                
                <!--/.row -->
            

</div>
</div>
<?php 
		$this->load->view('_footer');
              
?>