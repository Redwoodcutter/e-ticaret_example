<?php
$this->load->view('_header');
$this->load->view('_sidebar');
?>
<div class="col-lg-9">
                        <h1 class="page-header"></h1>
                        <div class="container"><br>
                    <div class="col-lg-12">
                          <h1 class="page-header">Yöneticiye Mesaj Gönder</h1>
                        <form action="<?=base_url()?>Uye/mesaj_ekle" method="POST" >
                           
                          <div class="form-group">
                            <input type="hidden" class="form-control" id="sifre"  name="email" placeholder="" value="<?=$uye[0]->email?>">
                          </div>
                            <div class="form-group">
                            <input type="hidden" class="form-control" id="sifre"  name="ad_soy" placeholder="" value="<?=$uye[0]->ad_soy?>">
                          </div>
                        
                            <div class="form-group">
                            <input type="hidden" class="form-control" id="adsoy"  name="durum" value="yeni">
                          </div>
                            <div class="form-group " >
                                <label  for="inputEmail3" class="control-label" ></label><br>
                                <textarea name="mesaj" required ></textarea>
                             <div>
                            <div class="form-group">
                            <input type="hidden" class="form-control" id="yetki"  name="Tel" value="<?=$uye[0]->Tel?>" >
                          <button type="submit" class="btn btn-primary">Mesaj Gönder</button>
                        </form>
                    <!--/.col-lg-12 -->
                </div>
                <!--/.row -->
            </div>
            <!--/.container-fluid -->
        </div>
</div>
    
                        
                    </div>
                    <!--/.col-lg-12 -->
                </div>
                
<?php
$this->load->view('_footer');
?>
<script src="<?=base_url()?>assets/admin/ckeditor/ckeditor.js"></script>
<script>
    $(function(){
        CKEDITOR.replace('mesaj')
    $('.textarea').wvysihtml5()
    })
    </script>
