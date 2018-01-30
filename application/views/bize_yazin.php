<?php 
		$this->load->view('_header');
                $this->load->view('_sidebar'); 
?>
  <div class="col-lg-9">

        <div class="row">
                <div class="col-lg-8">
                    <div class="col-lg-12">
                          <?php if($this->session->flashdata("mesaj")) { ?>
                         <div class="alert alert-info">
                             <a href="#" class="alert-success">Başarılı</a>
                             <br>
                                <?=$this->session->flashdata("mesaj");?> 
                              <?=$this->session->flashdata("email_sent");?> 
                                
                            </div>
                        <?php } ?>
                       
                        <h1 class="page-header"style="margin-top: 25px;"><?=$sayfa?></h1>
                        <form action="<?=base_url()?>Home/mesaj_gonder" method="POST" >
                            <div class="form-group">
                            <label for="exampleInputEmail1">Adınız soyadınız</label>
                            <input type="text" class="form-control" id="Ad_Soy"required name="Ad_Soy" placeholder="Adınız Soyadınız." >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">E-mailiniz</label>
                            <input type="text" class="form-control" id="Email" required name="Eposta" placeholder="E-mail Adresinizi giriniz.">
                          </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Telefon Numaranız</label>
                            <input type="adsoy" class="form-control" id="Tel" required name="Tel" placeholder="Telefon numaranızı giriniz.." >
                          </div>
                             <div class="form-group">
                            <label for="exampleInputPassword1">Mesajınız</label>
                            <textarea type="text" class="form-control" id="Mesaj" required name="Mesaj" rows="10" cols="100" placeholder="İletmek istedikleriniz"> </textarea>
                          </div>
                          <button type="submit" class="btn btn-primary" style="float: right;">Gönder</button>
                        </form>
                    <!--/.col-lg-12 -->
                
        
</div>
                </div>
            
                <!--/.col-lg-12 -->
            </div>
      
      

         
        </div>
        <!--/.col-lg-9 -->

      </div>
      <!--/.row -->

    </div>
    <!--/.container -->
    <br>
    <?php 
                $this->load->view('_footer'); 
    ?>
    