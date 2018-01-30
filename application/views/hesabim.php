<?php 
		$this->load->view('_header');
                $this->load->view('_sidebar'); 
?>


<div class="col-lg-9">

        
      <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="margin-top: 25px;"><?=$sayfa?></h1>
                </div>
                <!--/.col-lg-12 -->
                
            </div>
      
                        <?php if($this->session->flashdata("mesaj")) { ?>
                         <div class="alert alert-info">
                             <a href="#" class="alert-success">Başarılı</a>
                             <br>
                                <?=$this->session->flashdata("mesaj");?> 
                                
                            </div>
                        <?php } ?>
          <div class="col-lg-12">
                        <form action="<?=base_url()?>Uye/guncelle/<?=$uye[0]->id?>" method="POST" >
                            <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="email"required name="email" aria-describedby="emailHelp" value="<?=$uye[0]->email?>" >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Sifre</label>
                            <input type="password" class="form-control" id="sifre" required name="sifre" placeholder="Password" value="<?=$uye[0]->sifre?>">
                          </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Ad Soyad</label>
                            <input type="adsoy" class="form-control" id="adsoy" required name="adsoy" value="<?=$uye[0]->ad_soy?>">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Durum</label>
                            <input type="text" class="form-control" id="durum" required name="durum" value="<?=$uye[0]->durum?>" >
                          </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Yetki</label>
                            <input type="text" class="form-control" id="yetki" required name="yetki" value="<?=$uye[0]->yetki?>" >
                          </div>
                          <button type="submit" class="btn btn-primary">Kaydı Güncelle</button>
                        </form>
                    <!--/.col-lg-12 -->
                </div>
        </div>
        <!--/.col-lg-9 -->

      </div>
      <!--/.row -->

    </div>
    <!--/.container -->
<?php 
		
                $this->load->view('_footer'); 
?>
