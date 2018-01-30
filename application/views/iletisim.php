<?php 
		$this->load->view('_header');
                $this->load->view('_sidebar'); 
?>
    <div class="col-lg-9">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="margin-top: 25px;"><?=$sayfa?></h1>
                     <h5 class="page-header" style="margin-top: 12px;">Bize ulaşabileceginiz iletişim adreslerimiz</h5>
                      <?=$veri[0]->Iletisim?>
                </div>
        <!--/.col-lg-9 -->
                <div class="col-lg-6">
                    <div class="col-lg-12">
                        <strong> Adres :</strong> <br>
                       <?=$veri[0]->Adres?> <br>
                        <strong> Sehir :</strong> <br>
                        <?=$veri[0]->Sehir?> <br>
                        <strong> Telefon :</strong> <br>
                        <?=$veri[0]->Tel?> <br>
                    </div>
                    </div>
                <div class="col-lg-6">
                    <strong> E-posta : </strong><br>
                    <?=$veri[0]->Email?> <br>
                    <strong> Fax : </strong><br>
                    <?=$veri[0]->Fax?> <br>
                   
                    
                </div>
            </div>      
      </div>
      <!--/.row -->
      </div>
    </div>
    <!--/.container -->
    <br>
    <br>
    <br>
    <br>
    <?php 
                $this->load->view('_footer'); 
    ?>
    