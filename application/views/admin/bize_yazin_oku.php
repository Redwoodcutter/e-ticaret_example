<?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Mesaj Oku</h1>
                                    
                          <?php foreach ($veri as $rs){ ?>
                            <label>Mesaj Id :</label>
                            <p><?=$rs->Id?></p>
                            <label>Ad Soyad:</label>
                            <p><?=$rs->Ad_soy?></p>
                            <label>E-posta:</label>
                            <p><?=$rs->Eposta?></p>
                            <label>Telefon:</label>
                            <p><?=$rs->Tel?></p>
                            <label>Gönderilen İp:</label>
                            <p><?=$rs->Ip?></p>
                            <label>Mesaj:</label>
                            <p><?=$rs->Mesaj?></p>
                          <?php }?>                
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